import random
import argparse
import json

parser = argparse.ArgumentParser(description='Generates some random numbers')
parser.add_argument("-r", "--noRand", help="the number of random numbers you want to generate", type=int)
parser.add_argument("-n", "--min", help="the minimum number", type=int)
parser.add_argument("-x", "--max", help="the maximum number", type=int)
args = parser.parse_args()

numRands = 4
min = 0
max = 10

if args.noRand:
    numRands = args.noRand
if args.min:
    min = args.min
if args.max:
    max = args.max


res = [random.randrange(min, max, 1) for i in range(numRands)]
outputJson = {'data': res}
o = json.dumps(outputJson)
#o = o.replace("[", "{")
#o = o.replace("]", "}")
print(o)