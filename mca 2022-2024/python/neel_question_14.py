#write a python program that finds the largest file in the given directory.

#write a python program that finds the largest file in the given directory.
import os

#This gives the current working directory.
path = os.getcwd()

#Using that path we will list out all the files
x = os.listdir(path)

x_size = []

#Using this we would store the max value.
max_x_size = 0


index_0 = 0

#Using this loop we would append the current file size to x_size
for i in x:
    x_size.append(os.path.getsize(i))

max_x_size = max(x_size)

#We would use this to find the location of the largest file and give it to index_0
for index , j in enumerate(x_size) :
    if (max_x_size == j) :
        index_0 = index

print(x[index_0])





