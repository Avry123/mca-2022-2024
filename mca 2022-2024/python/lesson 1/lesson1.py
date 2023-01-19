initialLetter = []

stringList = ''

dictList = []

initialLetterSorted = []

def bubbleSort(m) :
    for i in m:
        for j in range(len(m) - 1) :
            if (m[j] > m[j + 1]) :
                a = m[j + 1]
                m[j + 1] = m[j]
                m[j] = a
    return m 

startOrStop = input('Start Y or Stop N')

while startOrStop.lower() == 'y' :
    string = input('Give me your string')
    stringList= string.split(' ')
#    print(stringList)
    for i in stringList :
       if (i[0].lower() not in initialLetter) :
            initialLetter.append(i[0].lower())
  #  print(initialLetter)
    initialLetterSorted.extend(bubbleSort(initialLetter))
 #   print(initialLetterSorted)
    for i in initialLetterSorted :
        for j in stringList :
            print(j)
            if (j[0].lower() == i) :
                x = {i : []}
                print(x)
                x[i].append(j)
        dictList.append(x)
    for i in dictList :
        print(i)
    initialLetter = []
    stringList = ''
    dictList = []
    initialLetterSorted = [] 
    startOrStop = input('Start Y or Stop N')
