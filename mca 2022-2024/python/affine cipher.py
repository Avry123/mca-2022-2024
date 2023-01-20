#affine cipher.

import string

def affine_cipher(character,a,b): 
    affineList = []
    alphabets = [*string.ascii_lowercase]
    normalList = [*character]
#    print(normalList)
    akey = int(a)
    bkey = int(b)
    normalListIndex = [alphabets.index(a) for a in normalList if a in alphabets] 
    # print(normalListIndex)
    #Appending index letter to affine list
    for i in normalListIndex:
        x = (akey * i + bkey) % len(alphabets)
      #  print(x)
        affineList.append(alphabets[x])
    return ''.join(affineList)

def affine_decrypt(ciphertext, a, b):
    affineList = []
    alphabets = [*string.ascii_lowercase]
    cipherList = [*ciphertext]
    akey = int(a)
    bkey = int(b)
    cipherListIndex = [alphabets.index(c) for c in cipherList if c in alphabets]
    for i in cipherListIndex:
        x = int((i - bkey) * (1/akey)) % len(alphabets)
        affineList.append(alphabets[x])
    return ''.join(affineList)

startOrStop = input('Start y or Stop n')

while startOrStop.lower() == 'y' :
    letter = input('give me only lowercase words')
    a = input('give me a key')
    b = input('give me a key')
    print(affine_cipher(letter,a,b))
    print(affine_decrypt(affine_cipher(letter,a,b),a,b))
    startOrStop = input('Start y or Stop n')
