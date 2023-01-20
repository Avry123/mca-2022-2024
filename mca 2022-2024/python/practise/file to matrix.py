#filehandling converting file to matrix.

with open('file10.txt', 'r') as file:
    text = file.readlines()
    matrix10 = []
    for i in text:
        columns = i.split(' ')
        matrix10.append(columns[0].split(' '))
    print(matrix10)
