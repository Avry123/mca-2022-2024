#regression expression 
import re

string = 'hello, my name is Neel AND my age is 12, whereas my brother`s age is 24'

match = re.findall(r'\b[A-Z]\w+', string)

match2 = re.findall(r'\d+', string)

print(match2)
