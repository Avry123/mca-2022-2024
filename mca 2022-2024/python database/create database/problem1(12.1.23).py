startOrStop = input('Start or Stop')

while startOrStop.lower() == 'y' :
    string = input('Give me your string')
    splitString = [*string]
    for i in splitString:
        print(i , ' : ', splitString[i])
    startOrStop = input('Start or Stop')