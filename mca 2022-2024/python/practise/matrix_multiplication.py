#matrix multiplication.

a = [[1,2,3], [4,5,6], [7,8,9]]
b = [[10,20,30],[40,50,60],[70,80,90]]
c = [[0,0,0],[0,0,0],[0,0,0]]

for index1, i in enumerate(a) :
    for index2,j in enumerate(b):
        for index3,g in enumerate(c):
            c[index1][index2] += a[index1][index3] * b[index3][index2]
print(c)
    


