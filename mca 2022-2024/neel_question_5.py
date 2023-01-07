#question 6

listq = [12 ,23,34,45]
listString = []
i = 0
#To convert the int to string list
for a in listq:
    listString.append(str(a))
    # print(listString)
    b = ''
while i < len(listString):
    b = b + listString[i]
    i = i + 1
print(b)
