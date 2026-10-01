<?php
declare(strict_types=1);

abstract class BangunDatar
{
    public function __construct(private readonly string $nama) {}

    abstract public function luas(): float;
    abstract public function keliling(): float;

    public function getNama(): string { return $this->nama; }

    public function __toString(): string
    {
        return sprintf('%-12s luas=%10.2f  keliling=%10.2f',
            $this->nama, $this->luas(), $this->keliling());
    }
}

class Lingkaran extends BangunDatar
{
    public function __construct(private readonly float $jariJari)
    {
        parent::__construct('Lingkaran');
        // TODO 1: tolak jari-jari <= 0.
        if ($jariJari <= 0) {
            throw new Error("Jari-Jari tidak boleh Noll atau negatif");
        }
    }

    // TODO 2: lengkapi. Gunakan M_PI, bukan 3.14.
    public function luas(): float     { return M_PI * pow($this->jariJari, 2); }
    public function keliling(): float { return 2 * M_PI * $this->jariJari; }

    public function getJariJari(): float { return $this->jariJari; }
}

class Persegi extends BangunDatar
{
    public function __construct(private readonly float $sisi)
    {
        parent::__construct('Persegi');
        // TODO 1: tolak sisi <= 0.
        if ($sisi <=0){
            throw new Error('Sisi tidak boleh Noll atau negatif');
        }
    }

    // TODO 2: lengkapi.
    public function luas(): float     { return pow($this->sisi, 2); }
    public function keliling(): float { return $this->sisi * 4; }
}

// TODO Langkah 2: buat kelas Segitiga (tiga sisi, rumus Heron).
//                 Tolak konstruksi bila ketiga sisi tidak membentuk segitiga.
class Segitiga extends BangunDatar
{
    public function __construct(
        private readonly float $sisia,
        private readonly float $sisib,
        private readonly float $sisic)
    {
        parent::__construct('Segitiga');
        if ($sisia <= 0 || $sisib <= 0 || $sisic <= 0 || 
        $sisia + $sisib <= $sisic || 
        $sisia + $sisic <= $sisib ||
        $sisib + $sisic <= $sisia){
            throw new Error('Ketiga sisi tidak membentuk segitiga');

        }
        
    }   
    public function luas(): float {$S = ($this->sisia + $this->sisib + $this->sisic)/2;
     return sqrt($S * ($S - $this->sisia) * ($S - $this->sisib) * ($S - $this->sisic));;}
    
    public function keliling(): float { return $this->sisia + $this->sisib + $this->sisic;}
}
// TODO Langkah 4: buat kelas Trapesium.
