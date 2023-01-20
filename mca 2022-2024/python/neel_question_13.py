#write a python program to read item informaton (id,name, price, qty) in file 'item dat'.WRITE A menu driven program to perform the following operation using Random access file.
#1.SEARCH FOR SPECIFIC ITEM BY NAME.
#2.FIND COSTLIEST ITEM
#3.DISPLAY ALL ITEM AND TOTAL COST.




#Taking a file and reading it.

#Converted the text file into a matrix
items = []
item = ''
#itemLeft = item[0:1].upper()
#itemRight = item[1:].lower()
#item = itemLeft + itemRight


#with open('fileHandling.txt') as f:
#    x = 0 #For index 
#    for line in f:
#        columns = line.split(', ')
#        items.append(columns[0].split())
    #First if statement for checking if the item exists.
#    if (item in items[1]):
#        for i in items[1] :
#            if (item == i):
#                print('Item: ' + item + ' price ' + items[2][x] + ' The quantity is, ' + items[3][x])
#            else :
#                x += 1
#    else :
#        print('It does not exists')

startOrStop = input('Start Y/Stop N')

while startOrStop.lower() == 'y':
    item = input('Give a name: ')
    operationToPerform = input('O for ordering, C for finding costliest item and M for menu ')
    itemLeft = item[0:1].upper()
    itemRight = item[1:].lower()
    item = itemLeft + itemRight
    with open('fileHandling.txt') as f:
        x = 0
        y = 0
        for line in f:
            columns = line.split(', ')
            items.append(columns[0].split())
        if (operationToPerform.lower() == 'o') :
            #First if statement for checking if the item exists.
            if (item in items[1]):
                for i in items[1] :
                    if (item == i):
                        print('Item: ' + item + ' price ' + items[2][x] + ' The quantity is, ' + items[3][x])
                    else :
                        x += 1
            else :
                 print('It does not exists')
        if (operationToPerform.lower() == 'c') :
            for i in items[2] :
                if (max(items[2]) == i) :
                    print('Item: ' + items[1][y] + ' price ' + items[2][y] + ' The quantity is, ' + items[3][y])
                else :
                    y += 1
        if (operationToPerform.lower() == 'm') :
            for index, i in enumerate(items[1]) :
                print('Item is ' + items[1][index] + ' the price is ' + items[2][index])
            print(' ' )
        items = []
        item = ''
        startOrStop = input('Start Y/Stop N')
    
    
    



    
     
  
            
    
        
        
        
        





