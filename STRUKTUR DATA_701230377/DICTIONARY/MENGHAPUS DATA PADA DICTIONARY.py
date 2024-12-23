#pop()
mydict1 = {1:'ds', 2:'de', 3:'da'}
value = mydict1.pop(2)
print('Dict:', mydict1)
Dict: {1: 'ds', 3: 'da'} #printout

#popitem()
mydict2 = {1:'ds', 2:'de', 3:'da'}
value = mydict2.popitem()
print('Dict:', mydict2)
Dict: {1: 'ds', 2: 'de'} #printout

#clear()
mydict3 = {1:'ds', 2:'de', 3:'da'}
mydict3.clear()
print('Dict:', mydict3)
Dict: {} #printout