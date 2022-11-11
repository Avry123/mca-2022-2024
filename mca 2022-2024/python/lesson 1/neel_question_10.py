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



runOrNot = input('Start Y/Stop N')

listCreation = []

def rotateList(m,n) :
    iterate = 0
    while iterate < n:
        x = listCreation.pop()
        listCreation.insert(0,x)
        iterate += 1
    print(listCreation)

while runOrNot.lower() == 'y' :
    numbersToAdd = input('Number of items to add ')
    for i in range(int(numbersToAdd)) :
        numbersForList = input('number: ')
        listCreation.append(int(numbersForList))
    rotationToPerform = input('No. Of Times to perform rotation: ')
    rotateList(listCreation, int(rotationToPerform))
    listCreation = []
    runOrNot = input('Start Y/Stop N')
