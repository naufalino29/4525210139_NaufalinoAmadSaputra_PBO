public class Segitiga extends BangunDatar {

    private final double alas;
    private final double tinggi;
    private final double sisi;

    public Segitiga(double alas, double tinggi, double sisi) {
        super("Segitiga");
        if (alas <= 0){
            throw new Error ("Alas tidak boleh Nol atau Negatif");
        }

        if (tinggi <=0)
            throw new Error ("Tinggi tidak boleh Nol atau Negatif");

        if (sisi <= 0){
            throw new Error("Sisi tidak boleh Nol atau Negatif");
        }
        this.alas = alas;
        this.tinggi = tinggi;
        this.sisi = sisi;
    }


    @Override
    public double luas(){
        return (alas * tinggi) / 2;
    }
    @Override  
    public double keliling(){
        return (sisi + sisi + sisi);
    }
}
