#ceaser cipher.

import string

def ceaser_cipher(char,key) :
    alphabet = [*string.ascii_lowercase]
    normalList = [*char]
    cipherList = []
    key1 = int(key)
    normalListIndex = [alphabet.index(a) for a in normalList if a in alphabet]
    #Appending index letter to cipher text
    for i in normalListIndex:
        x = (i + key1) % len(alphabet)
        cipherList.append(alphabet[x])
    return ''.join(cipherList)

import string

def ceaser_decrypt(ciphertext, key):
    alphabet = [*string.ascii_lowercase]
    cipherList = [*ciphertext]
    plaintextList = []
    key1 = int(key)
    cipherListIndex = [alphabet.index(c) for c in cipherList if c in alphabet]
    for i in cipherListIndex:
        x = (i - key1) % len(alphabet)
        plaintextList.append(alphabet[x])
    return ''.join(plaintextList)


startOrStop = input('Start y or Stop n')

while startOrStop.lower() == 'y' :
    letter = input('give me only lowercase words')
    a = input('give me a key')
    print(ceaser_cipher(letter,a))
    print(ceaser_decrypt(ceaser_cipher(letter,a),a))
    startOrStop = input('Start y or Stop n')

