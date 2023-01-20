#Collecting the value of the command line.

import argparse

# Create a parser object
parser = argparse.ArgumentParser()

# Define a command-line argument
parser.add_argument('--name', type=str, default='World')

# Parse the command-line arguments
args = parser.parse_args()

# Print the value of the 'name' argument
print(f'Hello, {args.name}!')
