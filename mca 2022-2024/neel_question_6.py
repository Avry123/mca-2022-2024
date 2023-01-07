#question 6

listq = []
listString = []
i = 0
# #To convert the int to string list
# for a in listq:
#     listString.append(str(a))
#     # print(listString)
#     b = ''
# while i < len(listString):
#     b = b + listString[i]
#     print(b)
#     i = i + 1

startOrNot = input('START Y/STOP N ')

while startOrNot.lower() == 'y':
    howManyNumbersToAdd = input('How many numbers do you want to add ')
    repeat = 0
    while  repeat < int(howManyNumbersToAdd):
        numbersAppended = int(input('number: '))
        listq.append(numbersAppended)
        for a in listq:
            listString.append(str(a))
            # print(listString)
            b = ''
        while i < len(listString):
          b = b + listString[i]
        #   print(b)
          i = i + 1
        repeat += 1
    print(b)
        
    startOrNot = input('START Y/STOP N ') 
