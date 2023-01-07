# Write a python function ascending(l) that returns.true if each in it's input list is atleast as big as the one before it?
# ascending([])
# ascending([3,3,4])

# Logic 
# Create a sorted list called correctedList and one which is not sorted we call it as a
# Now we compare the correctedList to a one by one and if they are equal we add iterate 3 by 1
# If they are in ascending order throught out the iterate3  should be equal to the lenght of the correctedList

repeatOrNot = input('Start Y/Stop N ')

a = []

def ascendingList(m) :
    iterate2 = 0
    iterate3 = 0
    check10 = 0
    correctedList = []
    trueOrFalse = 'true'
    correctedList += m
    # correctedList.sort()
    correctedList = bubbleSort(correctedList)
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
    
def bubbleSort(param) :
    iterate0 = 0
    num2 = len(param)
    num1 = len(param) - 1
    for i in range(num2):
        for j in range(i):
            if (param[j] > param[i]) :
                b = param[i]
                param[i] = param[j]
                param[j] = b
    return param


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
        
