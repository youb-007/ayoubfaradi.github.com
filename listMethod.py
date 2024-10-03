#listMethode

class List:
    @staticmethod
    def max(list=[]):
        max = list[0]
        for x in list:
            if x > max:
                max = x
        return max
    
    @staticmethod
    def min(list=[]):
        min = list[0]
        for x in list:
            if x < min:
                min = x
        return min

    @staticmethod
    def moyenne(list=[]):
        S = 0
        for x in list:
            S += x
        return S/len(list)

    @staticmethod
    def sort(list=[]):
        list_croi = []
        while list != []:
            min = list[0]
            i = 1
            for i in range(len(list)):
                if list[i]<min:
                    min = list[i]
            list_croi.append(min)
            list.remove(min)
        for x in list_croi:
            list.append(x)
        return list

    @staticmethod
    def medium(list=[]):
        list = List.sort(list)
        j = 0
        for x in list:
            j += 1
            if j == len(list)//2+1 and len(list)%2 != 0:
                return x
            elif  j == len(list)//2 and len(list)%2 == 0:
                return x
#MatriceMethode

from listMethod import List

class Matrice(List):
    
    @staticmethod
    def print_matrice(matrice):
        for list in matrice:
            print(list)

    @staticmethod
    def max(matrice):
        lmax = []
        for list in matrice:
            lmax.append(List.max(list))
        return List.max(lmax)
        
    @staticmethod
    def min(matrice):
        lmin = []
        for list in matrice:
            lmin.append(List.min(list))
        return List.min(lmin)
    
    @staticmethod
    def moyenne(matrice):
        lmoy = []
        for list in matrice:
            lmoy.append(List.moyenne(list))
        return List.moyenne(lmoy)
        
    @staticmethod
    def medium(matrice):
        lmedium = []
        for list in matrice:
            lmedium.append(List.medium(list))
        return List.medium(lmedium)

    @staticmethod
    def transpose(matrice=[]):
        transpose = [[None for i in range(len(matrice))] for j in range(len(matrice[0]))]
        for i in range(len(matrice[0])):
            for j in range(len(matrice)):
                transpose[i][j] = matrice[j][i]
        return transpose
    
Liste = [[9,4,2],[2,1,3],[8,2,5],[1,2,3]]

print(Matrice.max(Liste))
print(Matrice.min(Liste))
print(Matrice.moyenne(Liste))
print(Matrice.medium(Liste))
print(Matrice.print_matrice(Liste))
Liste = Matrice.transposée(Liste)
print(Matrice.print_matrice(Liste))

