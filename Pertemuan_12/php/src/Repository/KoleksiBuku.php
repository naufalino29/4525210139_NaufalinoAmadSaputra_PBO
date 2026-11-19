<?php
declare(strict_types=1);

namespace Perpustakaan\Repository;

use Countable;
use Perpustakaan\Model\Buku;

final class KoleksiBuku implements Countable
{
    /** @var array<string, Buku> */
    private array $data = [];

    public function simpan(Buku $buku): void { $this->data[$buku->getNomorInduk()] = $buku; }
    public function cariByIsbn(string $isbn): ?Buku { return $this->data[$isbn] ?? null; }
    /** @return Buku[] */
    public function semua(): array { return array_values($this->data); }
    public function count(): int { return count($this->data); }

    public function filter(callable $predikat): self
    {
        $hasil = new self();
        foreach ($this->data as $b) {
            if ($predikat($b)) { $hasil->simpan($b); }
        }
        return $hasil;
    }

    public function map(callable $fn): array { return array_map($fn, $this->semua()); }
    public function jumlahkan(callable $fn): float { return (float) array_sum($this->map($fn)); }

    public function kelompokkan(callable $fn): array
    {
        $hasil = [];
        foreach ($this->data as $b) { $hasil[$fn($b)][] = $b; }
        return $hasil;
    }
}