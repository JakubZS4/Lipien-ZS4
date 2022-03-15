class Samochod{
    constructor(marka, model, cena, rocznik, spalanie){ //dowolna nazwa : marka itp
        this.marka = marka;
        this.model = model;
        this.cena = cena;
        this.rocznik = rocznik;
        this.spalanie = spalanie;
    }

    wiek(){
        const data = new Date();
        const rok = data.getFullYear();
        const wiekPojazdow = rok - this.rocznik;

        return 'Wiek pojazdu wynosi: ' + wiekPojazdow;
    }

    koszt(){
        const paliwo = 7;
        return "Samochód pali: " + (this.spalanie*paliwo) + "zł na 100";
    }

}