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
    iterate0 = 0
    while iterate0 < int(b) :
        items = input('Item: ')
        listGettingInputs.append(items)
        iterate0 += 1
    dictionary10(listGettingInputs)
    listGettingInputs = []
    repeatOrNot = input('Start Y/Stop N')
        
    
