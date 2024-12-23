myset = {3,4,5,6}
myset2 = {5,6,7,8}

#union() - mengambil data yang ada pada kedua Sets
print(myset.union(myset2))

#intersection() - mengambil data yang hanya ada pada kedua Sets
print(myset.intersection(myset2))

#difference() - mengambil data yang hanya ada pada Set pertama atau berbeda dengan Set kedua
print(myset.difference(myset2))

#symmetric_difference - mengambil data yang hanya ada pada Set pertama dan kedua
print(myset.symmetric_difference(myset2))