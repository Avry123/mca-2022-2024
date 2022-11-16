# Online Python compiler (interpreter) to run Python online.
# Write Python 3 code in this online editor and run it.

runORStop = input('Start Y/Stop N')

initialLetter = []

def showDict(m) :
    # print(m)
    # Collecting the string
    iterate0 = 0
    # Collecting the initial letters while also avoiding repetition.
    while iterate0 < len(m):
        if (m[iterate0][0].lower() not in initialLetter) :
            initialLetter.append(m[iterate0][0].lower())
        iterate0 += 1
    initialLetter.sort()
    name = 'neel'
    iterate1 = 0
    # Looping Initialletter
    while iterate1 < len(initialLetter):
        name = initialLetter[iterate1]
        dict = {name : []}
        # print(dict)
        iterate2 = 0
        # Looping the list and if same appending that item to the array
        while iterate2 < len(m) :
            if (name == m[iterate2][0].lower()) :
                 dict[name].append(m[iterate2])
                #  This loop does six times so that why the wierd answer
            # print(dict)
            iterate2 += 1
            # This works 4 times.
        print(dict)
        iterate1 += 1
    
    
        
            

while runORStop.lower() == 'y':
    answer = input('Give a string ')
    splitList = answer.split()
    showDict(splitList)
    initialLetter = []
    runORStop = input('Start Y/Stop N')
    
    
