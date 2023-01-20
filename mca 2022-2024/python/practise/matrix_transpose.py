#matrix transpose

a =[[1,2,3],
    [4,5,6],
    [7,8,9]]

b = [[],[],[]]

for index1, i in enumerate(a):
    for index2, j in enumerate(a[0]):
        b[index1].append(a[index2][index1])

print(b)
        
