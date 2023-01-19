a = []

with open('recipe.txt', 'r') as file:
    x = file.readlines()
    for i in x :
        a.append(x.split(','))
    print(a)