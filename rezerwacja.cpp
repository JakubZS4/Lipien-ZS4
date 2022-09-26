Utworzyć klasę Rezerwacja, która przechowuje informacje:
1. numer referencyjny rezerwacji;
2. dane osobowe klienta – imię, nazwisko, e-mail, nr telefonu – przechowywane w klasie Klient;
3. data rezerwacji;
4. data przyjazdu;
5. rodzaj pokoju;
6. liczba nocy;
7. uwagi;
8. rabat.
Do klas Rezerwacja oraz Klient musisz dodać metody, przy pomocy których będzie można uzyskać dostęp do zmiennych (pól) klasy.
Utwórz odpowiednie konstruktory pozwalające w prosty sposób tworzyć obiekty.
Zwróć uwagę, że wartość pola numer referencyjny rezerwacji klasy Rezerwacja jest nadawana w momencie tworzenia obiektu (np. na podstawie znacznika czasu lub inny dowolny ciąg znaków) i później ta wartość nie może być zmieniona. Również jako data rezerwacji jest ustawiana data bieżąca w momencie tworzenia obiektu.
Zabezpiecz, aby nie można było utworzyć rezerwacji dla daty przyjazdu, która już minęła.

Dodaj metodę obliczającą kwotę noclegu na podstawie następujących stawek oraz rabatu:
Rodzaj pokoju
A 290,00
B 330,00
C 410,00
D 450,00
E 510,00
F 520,00
G 1150,00

Utwórz co najmniej 3 obiekty klasy Rezerwacja i przetestuj utworzone metody oraz konstruktory."



Jak na razie utworzyłam klasę Rezerwacja (public), dodałam metodę, która wyświetla dane rezerwacji i konstruktor, który pozwala mi tworzyć obiekty. I dalej mam problem. Jak utworzyć klasę Dane w klasie Rezerwacja? Jak przyporządkować numer referencyjny każdej rezerwacji? Jak ustawić datę rezerwacji na datę bieżącą i zablokować możliwość rezerwowania dat wcześniejszych? Jak wprowadzić metodę obliczającą cenę w zależności od liczby noclegów i rodzaju pokoju?
Proszę o pomoc.

Mam na razie coś takiego:
[CODE]
#include <cstdlib>
#include <iostream>
#include <string>
#include <time.h>
using namespace std;
class Rezerwacja {
public:
string numer_referencyjny;
string data_rezerwacji;
string data_przyjazdu;
string rodzaj_pokoju;
int liczba_nocy;
string uwagi;
float rabat;

void wyswietlDaneRezerwacji()
{
cout<<"Dane rezerwacji: "<<endl;
cout<<"\t Data rezerwacji: "<<data_rezerwacji<<endl;
cout<<"\t Data przyjazdu: "<<data_przyjazdu<<endl;
cout<<"\t Rodzaj pokoju: "<<rodzaj_pokoju<<endl;
cout<<"\t Liczba nocy: "<<liczba_nocy<<endl;
cout<<"\t Uwagi: "<<uwagi<<endl;
cout<<"\t Rabat: "<<rabat<<endl;
}
Rezerwacja (string adata_rezerwacji, string adata_przyjazdu, string arodzaj_pokoju, int aliczba_nocy, string auwagi, float arabat)
{
data_rezerwacji=adata_rezerwacji;
data_przyjazdu=adata_przyjazdu;
rodzaj_pokoju=arodzaj_pokoju;
liczba_nocy=aliczba_nocy;
uwagi=auwagi;
rabat=arabat;
}
};
int main(int argc, char *argv[])
{
Rezerwacja rez1 ("09.11.2012", "13.11.2012", "Jednoosobowy", 4, "Brak", 33.3);
rez1.wyswietlDaneRezerwacji();

system("PAUSE");
return EXIT_SUCCESS;
}
[/CODE]











\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\



Napisałam kod obliczający stawkę za nocleg w enum, na razie w osobnym projekcie:
[CODE]
#include <cstdlib>
#include <iostream>
using namespace std;
float rabat=0.3;
enum pokoje
{A=290, B=330, C=410, D=450, E=510, F=520, G=1150};
void kwota (pokoje rodzaj)
{
float stawka=rodzaj-(rabat*rodzaj);
cout<<"Stawka: "<<stawka<<" PLN"<<endl;
}
int main(int argc, char *argv[])
{
kwota(B);
system("PAUSE");
return EXIT_SUCCESS;
}
[/CODE]




/////////////////////////////////////////////////////////////////////////////////////// LINK"
https://www.forumpc.pl/topic/267488-zadanie-w-c-klasy/













