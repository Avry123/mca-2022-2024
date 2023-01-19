#Print this
# lst = [1 ,3, 'hi', 'bye']
# for i in range(len(lst)):
#     print(i)
#     lst[i] = lst[i] * 2
# print(lst)

# for i in range(0,5):
#     print(i)
import re

a= 'hello.py is a python file which has class and objects'

match = re.findall(r"\w+|\W+", a)

# print(a.split('.'))

print(match)

