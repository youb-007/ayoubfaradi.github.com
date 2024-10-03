class Personne:
    population_nombre = 0
    def __init__(self, nom, age, salaire):
        self.nom = nom
        self.age = age
        self.__salaire = salaire 
        Personne.population_nombre += 1
    
    def afficher_detail(self):
        return f"nom: {self.nom}\nage: {self.age}"
    
    @classmethod
    def population(cls):
       return f"le nombre total des personnes est : {cls.population_nombre}"
    
    def set_salaire(self, noveau_salaire):
        self.__salaire = noveau_salaire
    
    def get_salaire(self):
        return self.__salaire

    def Augmenter_salaire(self, n_pourcentage):
        return f"le noveau salaire apres l'augmentation: {self.__salaire + (self.__salaire * n_pourcentage/100)}"
    
    def quitter_cours(slef, cours_objet):
        for etudiant in cours_objet.etudiants:
            if(etudiant.age > 25):
                print(f"l'etudiant: {etudiant.nom} a quitte le cours de {cours_objet.nom}")
                cours_objet.etudiants.remove(etudiant)
        
class Cours:
    def __init__(self,nom, professeur, etudiants):
        self.nom = nom
        self.professeur = professeur
        self.etudiants= etudiants


    def annoncer_cours(self, Age= 27):
        count = 0
        if(self.cours_populaire(3)):
            print(f"le nom du cours est: {self.nom}\nle professeur du cours: {self.professeur.nom}")
            print("\n")

            print("les etudiants qui atteinds ce cours:")         
            for etudiant in etudiants:
                count += 1
                if(etudiant.age > Age):
                    print(f"etudiant n°{count}  : ")
                    print(f"nom: {etudiant.nom}\n age: {etudiant.age}\n")
            return 0
    def cours_populaire(self, max_nbr_etudiant=25):
        if(len(etudiants) >= max_nbr_etudiant):
            # return f"le cours le plus d'etudiant: {self.nom}"
            return True
        else:
            # return "aucun cours n'est populaire"
            return False

    


etudiant1 = Personne("hassan", 18, 150)
etudiant2 = Personne("ayoub", 21, 200)
etudiant3 = Personne("anas", 27, 200)

prof1 = Personne("ELmadani", 40, 5000)
prof2 = Personne("HAqay", 40, 5000)

etudiants = [etudiant1, etudiant2, etudiant3, ]
cours1 = Cours("EN", prof1, etudiants)


#print(etudiant1.afficher_detail())
#print(Personne.population())
#print(etudiant1.Augmenter_salaire(50))

#print(etudiant1.quitter_cours(cours1))
# print(cours1.annoncer_cours())
# print(cours1.cours_populaire(3))
#print(cours1.annoncer_cours())