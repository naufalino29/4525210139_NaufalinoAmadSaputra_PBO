public class Trapesium extends BangunDatar {

    private final double tinggi;
    private final double sisiA;
    private final double sisiB;
    private final double sisiC;
    private final double sisiD;

    public Trapesium( double tinggi, double sisiA, double sisiB, double sisiC, double sisiD ){
        super("Trapesium");
        if (tinggi <=0)
            throw new Error ("Tinggi tidak boleh Nol atau Negatif");

        if (sisiA <= 0 || sisiB <=0 || sisiC <=0 || sisiD <=0){
            throw new Error("Sisi tidak boleh Nol atau Negatif");
        }

        this.tinggi = tinggi;
        this.sisiA = sisiA;
        this.sisiB = sisiB;
        this.sisiC = sisiC;
        this.sisiD = sisiD;
    }


    @Override
    public double luas(){
        return 0.5 * (sisiA + sisiB) * tinggi;
    }
    @Override  
    public double keliling(){
        return sisiA + sisiB + sisiC + sisiD;
    }
}
