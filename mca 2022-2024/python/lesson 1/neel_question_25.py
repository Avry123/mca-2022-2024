import tkinter as tk
from tkinter import filedialog, Text
import os

root = tk.Tk()

canvas = tk.Canvas(root, height=400, width=400)
canvas.pack()

frame = tk.Frame(root, bg='violet')

number1 = tk.StringVar()
number2 = tk.StringVar()

num1 = 0
num2 = 0
total = 0

entry1 = tk.Entry(frame, textvariable=number1)

entry1.pack()

entry2 = tk.Entry(frame, textvariable=number2)

entry2.pack()

def display() :
    num1 = number1.get()
    num2 = number2.get()
    label = tk.Label(frame, text=f"Number 1: {num1}\nNumber 2 : {num2}")
    label.pack()

button = tk.Button(frame,text='Display', command=display)

button.pack()

def add() :
     # Remove any previous labels
    for widget in frame.winfo_children():
        if isinstance(widget, tk.Label):
            widget.destroy()
    num1 = number1.get()
    num2 = number2.get()
    total1 = int(num1) + int(num2)
    label = tk.Label(frame,text=f'The total is {total1}')
    label.pack()

def substraction() :
     # Remove any previous labels
    for widget in frame.winfo_children():
        if isinstance(widget, tk.Label):
            widget.destroy()
    num1 = number1.get()
    num2 = number2.get()
    total = int(num1) - int(num2)
    label = tk.Label(frame,text=f'The output is {total}')
    label.pack()

def multiplication() :
     # Remove any previous labels
    for widget in frame.winfo_children():
        if isinstance(widget, tk.Label):
            widget.destroy()
    num1 = number1.get()
    num2 = number2.get()
    total = int(num1) * int(num2)
    label = tk.Label(frame,text=f'The output is {total}')
    label.pack()

def division() :
     # Remove any previous labels
    for widget in frame.winfo_children():
        if isinstance(widget, tk.Label):
            widget.destroy()
    num1 = number1.get()
    num2 = number2.get()
    total = int(num1) / int(num2)
    label = tk.Label(frame,text=f'The total is, {total}')
    label.pack()

def modulus() :
     # Remove any previous labels
    for widget in frame.winfo_children():
        if isinstance(widget, tk.Label):
            widget.destroy()
    num1 = number1.get()
    num2 = number2.get()
    total = int(num1) % int(num2)
    label = tk.Label(frame,text=f'The Total is, {total}')
    label.pack()

add_button = tk.Button(frame,text='Add',command=add)

add_button.pack()

minus_button = tk.Button(frame,text='Minus',command=substraction)

minus_button.pack()

multiplication_button = tk.Button(frame,text='Multiply',command=multiplication)

multiplication_button.pack()

division_button = tk.Button(frame, text='Division', command=division)

division_button.pack()

modulus_button = tk.Button(frame,text='Modulus', command=modulus)

modulus_button.pack()

frame.place(relwidth=0.8 , relheight=0.8, relx ='0.1', rely='0.1')

root.mainloop()