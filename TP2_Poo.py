#Ex 1
class Produit:

    def __init__(self, nom, prix, quantite_stack):
        self.nom = nom
        self.prix = prix
        self.quantite = quantite_stack

    def afficher_details(self):
        print(f"Nom : {self.nom}, Prix : {self.prix}, Quantité Stock : {self.quantite}")


p1 = Produit("Phone",14500,9)
p1.afficher_details()

#Ex 2
class Produit:
    def __init__(self, nom, prix, quantite_stack):
        self.__nom = nom
        self.__prix = prix
        self.__quantite = quantite_stack

    def afficher_details(self):
        print(f"Nom : {self.__nom}, Prix : {self.__prix}, Quantité Stock : {self.__quantite}")

    def get_nom(self):
        return self.__nom
    def get_prix(self):
        return self.__prix
    def get_quantité(self):
        return self.__quantite
    
    def set_nom(self,nom):
        self.__nom = nom
    def set_prix(self,prix):
        self.__prix = prix
    def set_nom(self,nom):
        self.__nom = nom

    @staticmethod
    def sortList(list):
        list_dec = []
        while list != []:
            max = list[0]
            i = 1
            for i in range(len(list)):
                if list[i]>max:
                    max = list[i]
            list_dec.append(max)
            list.remove(max)
        return list_dec
    
    @staticmethod
    def printStar(num):
        i=1
        j=1
        for i in range(num):
            for j in range(i):
                print('*',end='')
            print('\n')


import random as r

l = r.sample(range(0,100),10)


p2 = Produit("pc",5000,12)
p2.set_nom('labtop')
print(p2.get_nom())

l2 = Produit.sortList(l)
print(l2)

star1 = Produit.printStar(5)



#Ex 3
class Produit:
    def __init__(self, nom, prix, quantite_stack):
        self._nom = nom
        self._prix = prix
        self._quantite = quantite_stack

    def afficher_details(self):
        print(f"Nom : {self._nom}, Prix : {self._prix}, Quantité Stock : {self._quantite}")

    def calculer_prix_total(self,quantité):
        return f"Prix Total {self._prix * quantité}"


class Aliment(Produit):
    population  = 0
    def __init__(self, nom, prix, quantite_stack, date_peremption):
        super().__init__(nom, prix, quantite_stack)
        self._date = date_peremption
        Aliment.population+=1
    
    def afficher_details(self):
        print(f"Nom : {self._nom}, Prix : {self._prix}, Quantité Stock : {self._quantite}, Date de Peremption {self._date}")
    @classmethod
    
    def nbr_aliment(cls):
        print(f'Nomber totale de aliments : {cls.population}')
    
    def calculer_prix_total(self,quantité,date_per):
        date_p = []
        date_p = date_per.split('-')
        date_x= []
        date_x = self._date.split('-')
        if int(date_x[0])-1 == int(date_p[0]):
            return (self._prix*quantité)-(self._prix * quantité * 0.1)
        elif int(date_x[0])-2 == int(date_p[0]):
            return (self._prix*quantité)-(self._prix * quantité * 0.05)
        else:
            return (self._prix*quantité)

p3 = Aliment("Banana", 11,1000,'2023-01-19')
p4 = Aliment("TV", 90000,999,"2024-09-24")

Aliment.nbr_aliment()

print(p3.calculer_prix_total(10,'2024-04-14'))
