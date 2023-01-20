#regression expression 
import re

#string = 'hello, my name is Neel AND my age is 12, whereas my brother`s age is 24'

#match = re.findall(r'\b[A-Z]\w+', string)

#match2 = re.findall(r'\d+', string)

#print(match2)

a = ''
b = []

with open('/mca2022/python/practise/file10.txt', 'r') as f:
    file = f.readlines()
    for line in file:
       b.append(line.split())
    print(b)
        
