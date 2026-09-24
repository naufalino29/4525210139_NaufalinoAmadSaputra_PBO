public class Dosen extends PegawaiTetap{
    private double tunjanganFungsional;

    public Dosen(String nip, String nama, double gajiPokok, int masakerja, double tunjanganFungsional ){
        super(nip, nama, gajiPokok, masakerja);
    
        this.tunjanganFungsional = tunjanganFungsional;
    }

    @Override 
    public double hitungGaji(){
        return super.hitungGaji() + this.tunjanganFungsional;
    }
    
    @Override 
    public String jenis(){
        return "DOSEN";
    }

    @Override 
    protected int getMasaKerjaTahun(){
        return super.getMasaKerjaTahun();
    }
}
