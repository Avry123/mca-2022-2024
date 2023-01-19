#write a programme to create list by concatenating a given list which range goes from 1 to n 
#Sample: ['p', 'q']
#output:['p1', 'q1', 'p2', 'q2']

# First ask how many letters to add
# numbers to take
# then sort it using bubble sort

repeatOrNot = input('Start Y')

addString = []

while repeatOrNot.lower() == 'y' :
    noOfLetters = input('No of letters to add ')
    numbers = input('numbers to add ')
    iterate0 = 0
    answer = []
    while iterate0 < int(noOfLetters) :
        letter = input('Letter')
        addString.append(letter)
        iterate0 += 1
    #Bubble Sort
    iterate1 = 0
    while iterate1 < len(addString) :
        iterate2 = 0
        b = 0
        while iterate2 < iterate1 :
            if (addString[iterate2] > addString[iterate1]) :
                b = addString[iterate1]
                addString[iterate1] = addString[iterate2]
                addString[iterate2] = b
            iterate2 += 1
        iterate1 += 1
    iterate2 = 1
    while iterate2 < int(numbers) + 1 :
        iterate3 = 0
        while iterate3 < len(addString) :
            answer.append(addString[iterate3] + str(iterate2))
            iterate3 += 1
        iterate2 += 1
    print(answer)
    addString = []
    answer = []
    repeatOrNot = input('Start Y')
   
