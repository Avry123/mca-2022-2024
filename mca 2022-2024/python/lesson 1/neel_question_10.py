# A list rotation consist of taking the list last element and moving it to the fornt.for instance if we rotate the list(1,2,3,4,5) we get [5,1,2,3,4]
#Write a python having function rotatelist(), that takes list L and a positive integer k and return the list L after k rotation. If k is not positive, your function should return, l unchanged, note that your function should not change l itself and should return rotated list
# example: rotateList([1,2,3,4 ,5], 3)
# output: [3,4,5]

# Online Python compiler (interpreter) to run Python online.
# Write Python 3 code in this online editor and run it.
# b = [1,2,3,4,5]
# c = []

# d = []

# x = b.pop()

# c.append(x)

# for i in b[0:5]:
#     d.append(i)
# print(d)

# print(c + d)

runOrNot = input('Start Y/Stop N ')

listCreation = []

a = []

b = []

def rotateList(m,n) :
        iterate2 = 0
        while iterate2 < n:
            x = m.pop()
            a.append(x)
            iterate2 = iterate2 + 1
        print(a + m)
        
    
while runOrNot.lower() == 'y':
    askingHowManyValues = input('How many values do you want to add ? ')
    iterate1 = 0
    while iterate1 < int(askingHowManyValues) :
        numberAddingToList = input('Number: ')
        listCreation.append(int(numberAddingToList))
        iterate1 = iterate1 + 1
    numberOfTimesToRotate = int(input('Rotation: '))
    print(type(listCreation))
    print(type(numberOfTimesToRotate))
    rotateList(listCreation , numberOfTimesToRotate)
    listCreation = []
    a = []
    b = []
    runOrNot = input('Start Y/Stop N ')
    
    
    
