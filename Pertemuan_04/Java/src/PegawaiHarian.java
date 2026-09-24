public class PegawaiHarian extends Pegawai {
    private final int harikerja;
    public PegawaiHarian(String nip, String nama, double gajiPokok, int harikerja){
        super(nip, nama, gajiPokok);
        this.harikerja = harikerja;
    }

    @Override
    public double hitungGaji(){
        return super.hitungGaji()*harikerja;
    }

    @Override 
    public String jenis(){
        return "HARIAN";
    }
}
