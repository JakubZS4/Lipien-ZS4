#ifndef PYTANIE_H
#define PYTANIE_H
#include <iostream>

class pytanie
{
    public:
       string trescPytania, a, b, c, poprawna, odpowiedz;
       int punkty;

       void wczytajPytanie();
       void zadajPytanie();
       void sprawdz();
};


#endif // PYTANIE_H
