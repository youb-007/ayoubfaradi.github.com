import json

# Simple dictionary to write to a JSON file
data = {
    "clients": [
        {"nom": "A", "age": 18, "salaire": 1000},
        {"nom": "B", "age": 21, "salaire": 1000},
        {"nom": "C", "age": 19, "salaire": 1000}
    ]
}

# Writing the dictionary to a JSON file
jsonf = open("fichier.json", "w")
json.dump(data, jsonf, indent=4)

# Optionally, reading the JSON file back to verify the content
jsonf = open("fichier.json", "r")
loaded_data = json.load(jsonf)
print(loaded_data)

#OUTPUT

{
    "clients": [
        {"nom": "A", "age": 18, "salaire": 1000},
        {"nom": "B", "age": 21, "salaire": 1000},
        {"nom": "C", "age": 19, "salaire": 1000}
    ]
}