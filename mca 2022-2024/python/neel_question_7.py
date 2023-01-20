# Online Python compiler (interpreter) to run Python online.
# Write Python 3 code in this online editor and run it.

a = [['n' , 'e', 'e', 'l'],
     ['r', 'e', 'e', 't'],
     ['n','a','s','h'],
     ['s','e','a','n']]
    
b = [[],[],[],[]]
i = 0 

aLength = len(a)

while i < aLength:
    print(i)
    j = 0
    while j < aLength:
        b[i].append(a[j][i])
        print('completed')
        j = j+ 1
    i = i + 1
print(b)



# b[0].append(a[0][0])
# print(b)
        
        
    
    
