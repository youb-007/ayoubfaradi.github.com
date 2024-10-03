
#partie 1
from abc import ABC ,abstractmethod
class Personne (ABC):
    def __init__(self,nom_complet,CIN,age):
        self.nom_complet=nom_complet
        self.CIN=CIN
        self.age=age
        @abstractmethod
        def afficher_detail(self):
            pass
@staticmethod
def nombrePremier (x):
    if x>=0:
        if x==1:
         return True
    else: 
        for i in range (2,int(x//2)):
            if x%i == 0:
                return False
        else:
            return True
        
@staticmethod
def renvoi(n1,n2):
 lis=[]
 for i in range(n1,n2+1):
    if Personne.nombrePremier(i):
       lis.append(i)
    return lis
 
#partie 2

class Client(Personne):
    tot_client=0
    def __init__(self,nom_complet,CIN,age,id_client,budget):
       super().__init__(nom_complet,CIN,age)
       self.id_client=id_client
       self.budget=budget
       Client.tot_client += 1

    def afficher_details(self):
     pass
@classmethod
def afficher_population(cls):
    print(f"nombre total des clients:",cls.tot_client)

def __add__(self,c):
   return(self.budget+c.budget)


@staticmethod
def print_stars(n):
   for i in range (n,-1,-1):
      for j in range (0,i+1):
         print("*",end="")
         print("\n")


       

#partie3
class vendeur (Personne):
   tot_vendeurs=0
   def __init__(self, id_vendeur ,__salaire,nom_complet, CIN, age):
      super().__init__(nom_complet, CIN, age)
      self.id_vendeur=id_vendeur
      self.__salaire=__salaire
      vendeur.tot_vendeurs += 1
   def get_salaire(self):
        return self.__salaire
   def set_salaire(self,new_salaire):
        if new_salaire>=0:
            self.__salaire+=new_salaire
        else:
            print(f"veuillez entrer une valeur positive")
   def afficher_detais(self):
    pass

@classmethod
def nmbrVendeurs(cls):
    print(f"nombre total des vendeurs:",cls.tot_vendeurs)

   


#partie4
class produit:
   tot_prod=0
   def __init__(self,nom,prix):
      self.nom=nom
      self.prix=prix
      produit.tot_prod+=1
   def afficher_detail(self):
      print(f"le nom e produit est:{self.nom} et le prix de produit est:{self.prix}")
@classmethod
def nmbrProduits(cls):
   print(f"le nombre total des produits est:",{cls.tot_prod})

@staticmethod
def sortList(list):
    list_2=[]
    for x in list:
      if x not in list_2:        
        list_2.append(x)
        list_2=sorted(list_2)        
    for i in range(len(list_2)):
        for j in range (i+1,len(list_2)):
            b=0
            if list_2 [i]>list_2[j]:
                b=list[i]
                list_2[i]=list_2[j]
                list_2[j]=i 
    return list_2
l=[1,3,2,5,7,4,8,6,8,7]  
print(sortList(l))

#partie 5
class vente:
    total_ventes = 0
    meilleuire_vente_vente = None
    def __init__(self,id_vente,date_vente,v_vendeur,v_client,produits):
      self.id_vente=id_vente                                          
      self.date_vente=date_vente
      self.v_vendeur=v_vendeur
      self.v_client=v_client
      self.produits=produits
      vente.total_ventes += 1
      ptv=0
      for x in produits:
         ptv+=x.prix
      self.prix_total_vente=ptv 
    
    @classmethod
    def afficher_total_ventes(cls):
        print(f"Nombre total de ventes: {cls.total_ventes}")
    @classmethod
    def meilleuire_vente(cls):
        if cls.meilleuire_vente:
            print(f"la Meilleure vente est: {cls. meilleuire_vente_vente} avec un total de {cls.meilleuire_vente_vente}")
    
    
            

V1 = vendeur("Vendeur1", "123456", 30, "ID1", 5000)
V2 = vendeur("Vendeur2", "654321", 35, "ID2", 6000)
C1 = Client("Client1", "789012", 25, "IDC1", 10000)
C2 = Client("Client2", "345678", 28, "IDC2", 8000)
P1 = produit("Produit1", 50)
P2 = produit("Produit2", 30)
P3 = produit("Produit3", 70)
Vente1 = vente("V1", "2024-03-05", V1,C1, [P1])
Vente2 = vente("V2", "2024-03-06", V2,C2,[P2, P3])
V1.afficher_detais()
V2.afficher_detais()
C1.afficher_details()
C2.afficher_details()
P1.afficher_detail()
P2.afficher_detail()
P3.afficher_detail()
vente.afficher_total_ventes()
vente.meilleuire_vente()


                              
         
        
      
