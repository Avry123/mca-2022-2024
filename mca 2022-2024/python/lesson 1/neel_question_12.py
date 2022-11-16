# Online Python compiler (interpreter) to run Python online.
# Write Python 3 code in this online editor and run it.
repeatOrNot = input('Start Y/Stop N')

initialLetter = []

def ascending(m) :
    iterate0 = 0
    name = 'neel'
    while iterate0 < len(m) :
        if (m[iterate0][0].lower() not in initialLetter) :
            initialLetter.append(m[iterate0][0].lower())
        iterate0 += 1
    iterate1 = 0
    initialLetter.sort()
    while iterate1 < len(initialLetter) :
        name = initialLetter[iterate1]
        dict ={name : []}
        print(dict)
        if (name) :
            iterate2 = 0
            while iterate2 < len(m) :
                if ()
                iterate2 += 1
        iterate1 += 1
        

while repeatOrNot.lower() == 'y':
    answer = input('Give us a string')
    splitString = answer.split()
    ascending(splitString)
    repeatOrNot = input('Start Y/Stop N')
    
    
    
    # Online Python compiler (interpreter) to run Python online.
# Write Python 3 code in this online editor and run it.
string10 = 'HEY HOW ARE YOU DOING OOO'
splitList = string10.split()

a = ['h', 'a', 'y', 'd' , 'o'] 
# Initial Letter

name = 'neel'

# dict = {name : []}

# dict['neel'].append('hello')

iterate0 = 0

while iterate0 < len(a) :
    iterate1 = 0
    a.sort()
    name = a[iterate0]
    dict = {name : []}
    if (name) :
       while iterate1 < len(splitList) :
           if (name == splitList[iterate1][0].lower()) :
               dict[name].append(splitList[iterate1])
           iterate1 += 1
    print(dict)
    iterate0 += 1


    
    




