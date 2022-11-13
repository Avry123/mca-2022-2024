# Write a python function ascending(l) that returns.true if each in it's input list is atleast as big as the one before it?
# ascending([])
# ascending([3,3,4])

repeatOrNot = input('Start Y/Stop N ')

a = []


def ascendingList(m) :
    iterate2 = 0
    iterate3 = 0
    correctedList = []
    trueOrFalse = 'true'
    correctedList += m
    correctedList.sort()
    while iterate2 < len(correctedList) :
        if (m[iterate2] == correctedList[iterate2]) :
            iterate3 += 1
        iterate2 += 1
    if (iterate3 == len(m)) :
        print('true')
    else :
        print('false')
    iterate2 = 0
    iterate3 = 0
    correctedList = []

while repeatOrNot.lower() == 'y' :
    letterOrNot = input('Letter l/Number n ')
    noOfInputs = input('how many times do you want to add : ')
    iterate = 0
    if letterOrNot.lower() == 'l':
        while iterate < int(noOfInputs) :
            addingItems = input('Letter: ')
            a.append(addingItems)
            iterate += 1
    else :
        while iterate < int(noOfInputs) :
            addingItems = input('Number: ')
            a.append(int(addingItems))
            iterate += 1
    ascendingList(a)
    a = []
    repeatOrNot = input('Start Y/Stop N ')
        
