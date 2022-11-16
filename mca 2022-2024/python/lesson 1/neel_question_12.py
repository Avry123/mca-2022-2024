# Write a python program to create a dictionary with key as first character and value as words starting with that character.
# The program take a string and create a dictionary with key as first character and value as words starting wth that character.
# example: enter string: Python is my favorite programming language in the entire world 
# ('e',':',['entire'])
# ('f',':',['favorite'])
# ('i',':', ['is', 'in'])
# ('m', ':', ['most', 'my'])
# ('l', ':', ['language'])
# ('p', ':', ['programming' , 'python'])
# ..

# a = 'name'

# thingTODo = {a : 'neel'}

# print(thingTODo)

# a = ['neel','reet','mangesh']

# b = a[0]

# print(b[0:1])

listGettingInputs = []

repeatOrNot = input('Start Y/Stop N')

def dictionary10(m) :
    firstItem = m[0]
    firstLetterOfFirstItem = firstItem[0:1]
    dictionaryToPrint = {firstLetterOfFirstItem : listGettingInputs}
    print(dictionaryToPrint)

while repeatOrNot.lower() == 'y' :
    b = input('No of inputs you want in a list: ')
    
    
    
    
    
    # Online Python compiler (interpreter) to run Python online.
# Write Python 3 code in this online editor and run it.
repeatOrNot = input('Start Y/Stop N ')

stringBrokenIntoList = []

initialLetter = []

elementWithInitialLetter = []

def arrange(m) :
    # Getting rid of , ? < !
    for i in m :
        if i not in initialLetter :
            initialLetter.append(i)
    # Loop for initialLetter
    iterate0 = 0
    while iterate0 < len(initialLetter) :
        iterate1 = 0
        while iterate1 < len(stringBrokenIntoList) :
            print('This is second loop', stringBrokenIntoList[iterate1])
            iterate1 += 1
        print('This is first loop', initialLetter[iterate0])
        iterate0 += 1

while repeatOrNot.lower() == 'y' :
    stringCollection = input('Please give string ')
    stringCollection.split()
    stringBrokenIntoList += stringCollection
    arrange(stringBrokenIntoList)
    repeatOrNot = input('Start Y/Stop N ')
    
    
    
    
    
    
    
    
    
    
    # Online Python compiler (interpreter) to run Python online.
# Write Python 3 code in this online editor and run it.


# 1. Following takes the first letter from the list and avoids repetition and appends it to the new list.

# a = ['neel', 'reet', 'mangesh', 'tanvi' , 'tanvi']

# commonLetter = []

# i = 0

# while i < len(a) :
#     if (a[i][0]  not in commonLetter) :
#         commonLetter.append(a[i][0])
#     i += 1

# print(commonLetter)

a = ['neel', 'reet', 'mangesh', 'tanvi' , 'tanvi' , 'nimesh']

b = ['n' , 'r', 'm', 't']

addingItems = []

# b will be the while loop here, inside of this there will be the a loop
if (b[0] == a[0][0]) :
    addingItems.append(a[0])
    # iterate += 1 
print(addingItems)

if (b[0] == a[1][0]) :
    addingItems.append(a[1])
    # iterate += 1 
print(addingItems)

if (b[0] == a[2][0]) :
    addingItems.append(a[2])
    # iterate += 1 
print(addingItems)
    
if (b[0] == a[3][0]) :
    addingItems.append(a[3])
    # iterate += 1 
print(addingItems)

if (b[0] == a[4][0]) :
    addingItems.append(a[4])
    # iterate += 1 
print(addingItems)

if (b[0] == a[5][0]) :
    addingItems.append(a[5])
    # iterate += 1 
print(addingItems)

# iterate0 += 1
    iterate0 = 0
    while iterate0 < int(b) :
        items = input('Item: ')
        listGettingInputs.append(items)
        iterate0 += 1
    dictionary10(listGettingInputs)
    listGettingInputs = []
    repeatOrNot = input('Start Y/Stop N')
        
    
