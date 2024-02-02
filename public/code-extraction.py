import numpy as np  # Importe la bibliothèque NumPy pour manipuler des tableaux et des données numériques
import os  # Importe la bibliothèque os pour interagir avec le système d'exploitation
import csv  # Importe la bibliothèque csv pour la manipulation de fichiers CSV
import matplotlib.pyplot as plt  # Importe la bibliothèque matplotlib pour créer des graphiques
import tabulate  # Importe la bibliothèque tabulate pour formater les tables
import pypandoc  # Importe la bibliothèque pypandoc pour la conversion de texte entre différents formats

try:
    with open("public/DumpFile.txt", encoding="utf8") as fh:  # Tente d'ouvrir le fichier "DumpFile.txt" en lecture
        res = fh.read()  # Lit le contenu du fichier dans la variable res
except FileNotFoundError:
    print("Le fichier n'existe pas : %s" % os.path.abspath('fichieratraiter.txt'))  # Affiche un message si le fichier n'est pas trouvé
    res = ""  # Initialise la variable res avec une chaîne vide si le fichier n'est pas trouvé

ress = res.split('\n')  # Divise le contenu du fichier en lignes et stocke dans la liste ress
tab_dest = np.array([])  # Initialise un tableau NumPy vide pour stocker des adresses IP uniques
fic = open("test.csv", "w")  # Ouvre le fichier "test.csv" en mode écriture
evenement = "DATE ; SOURCE ; PORT ; DESTINATION ; FLAG ; SEQ ; ACK ; WIN ; OPTIONS ; LENGTH"
fic.write(evenement + "\n")  # Écrit la première ligne d'en-tête dans le fichier CSV

characters = ":"  # Initialise le caractère ":" dans la variable characters

for event in ress:  # Parcourt chaque ligne du fichier lu
    if event.startswith('11:42'):  # Vérifie si la ligne commence par '11:42'
        seq = ""
        heure1 = ""
        nomip = ""
        port = ""
        flag = ""
        ack = ""
        win = ""
        options = ""
        length = ""

        texte = event.split(" ")
        heure1 = texte[0]

        texte = event.split(" ")
        nomip1 = texte[2].split(".")

        if len(nomip1) == 2:
            nomip = nomip1[0]
        elif len(nomip1) == 3:
            nomip = ".".join(nomip1[:2])
        elif len(nomip1) == 4:
            nomip = ".".join(nomip1[:3])
        elif len(nomip1) == 5:
            nomip = ".".join(nomip1[:4])
        elif len(nomip1) == 6:
            nomip = ".".join(nomip1[:5])

        flag2 = 0
        for item in tab_dest:
            if item == nomip:
                flag2 = 1

        if flag2 == 0:
            tab_dest = np.append(tab_dest, nomip)

        if len(texte) > 1:
            port1 = texte[2].split(".")
            port = port1[-1]

        texte = event.split(" ")
        nomip2 = texte[4]

        texte = event.split("[")
        if len(texte) > 1:
            flag1 = texte[1].split("]")
            flag = flag1[0]

        texte = event.split(",")
        if len(texte) > 1:
            if texte[1].startswith(" seq"):
                seq1 = texte[1].split(" ")
                seq = seq1[2]

        if len(texte) > 2:
            if texte[2].startswith(" ack"):
                ack1 = texte[2].split(" ")
                ack = ack1[2]
            if texte[1].startswith(" ack"):
                ack1 = texte[1].split(" ")
                ack = ack1[2]

        if len(texte) > 3:
            if texte[3].startswith(" win"):
                win1 = texte[3].split(" ")
                win = win1[2]
            if texte[2].startswith(" win"):
                win1 = texte[2].split(" ")
                win = win1[2]

        texte = event.split("[")
        if len(texte) > 2:
            options1 = texte[2].split("]")
            options = options1[0]

        texte = event.split("]")
        if len(texte) > 2:
            length1 = texte[2].split(" ")
            length = length1[2]

        texte = event.split(",")
        if len(texte) > 3:
            if texte[3].startswith(" length"):
                length1 = texte[3].split(" ")
                length = length1[2]
                length = length.replace(characters, "")

        evenement = f"{heure1};{nomip};{port};{nomip2};{flag};{seq};{ack};{win};{options};{length}"
        fic.write(evenement + "\n")

# Convertit le CSV en table Markdown
csv_data = np.genfromtxt("test.csv", delimiter=';', dtype=None, names=True, encoding=None)
markdown_table = tabulate.tabulate(csv_data, headers=["DATE", "SOURCE", "PORT", "DESTINATION", "FLAG", "SEQ", "ACK", "WIN", "LENGTH"], tablefmt="pipe")

# Convertit la table Markdown en HTML
html_content = pypandoc.convert_text(markdown_table, "html", format="md")

# Sauvegarde le contenu HTML dans un fichier
with open("public/test.html", "w", encoding="utf-8") as html_file:
    html_file.write(html_content)

# Affiche le tableau final et génère un graphique
print("tableau final", tab_dest)
plt.plot(range(len(tab_dest)), tab_dest)
plt.show()

fic.close()  # Ferme le fichier "test.csv"
