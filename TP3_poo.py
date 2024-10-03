import math
from abc import ABC, abstractmethod
class Vehicule(ABC):
    def __init__(self,marque):
        self.marque=marque
    @abstractmethod
    def deplacer(self):
        pass
    math

    @staticmethod
    def prime(n):
        pass


class voiture(Vehicule):
    def deplacer(self):
        return "est une voiture"

    @staticmethod
    def prime(n):
        for i in range(2,n//2):
            if (n % i == 0):
                return f"{n} n'est pas premier"
            return f"{n} est premier"

class Avion(Vehicule):
    def deplacer(self):
        return "est une avion"

    @staticmethod
    def prime(n):
        for i in range(2, n // 2):
            if (n % i == 0):
                return f"{n} n'est pas premier"
            return f"{n} est premier"


v =  voiture("BMW")
a = Avion("Cetroen")
print(v.deplacer())
print(a.deplacer())
print(voiture.prime(17))

from abc import ABC, abstractmethod
class form(ABC):
    def __init__(self):
        pass

    def calculer_surface(self):
        pass


class Rectangle(form):
    def __init__(self, longueur, largeur):
        self.longueur = longueur
        self.largeur = largeur
    @abstractmethod()
    def calculer_surface(self):
        return self.longueur * self.largeur
    @staticmethod
    def somme_aires(rectangle, cercle):
        return f"la somme de deux formes est:{rectangle.calculer_surface() + cercle.calculer_surface()}"
    def somme_aire(self, cercle):
        return f"la somme de deux formes est:{self.calculer_surface() + cercle.calculer_surface()}"

class Cercle(form):
    def __init__(self, r):
        self.r = r
    @abstractmethod()
    def calculer_surface(self):
        return  f"la surface du Cercle:{math.pi * math.pow(self.r, 2)}"
        return math.pi * math.pow(self.r, 2)

r = Rectangle(2,3)
c = Cercle(5)
print(r.cacluer_surface())
print(c.cacluer_surface())
print(Rectangle.somme_aires(r, c))
print(r.somme_aire(c))