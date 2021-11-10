#識別番号付き武将クラス
class Commander:
    #武将クラス
    __counter = 0  #何番目までの識別番号を与えたか

    def __init__(self, name: str) -> None:
        #コンストラクタ
        self.__name = name
        Commander.__counter += 1
        self.__id = Commander.__counter

    def id(self) -> int:
        #識別番号を取得
        return self.__id
    
    @classmethod
    def max_id(cls) -> int:
        #現時点で何番までの識別番号を与えたのか
        return cls.__counter
    
    def print(self) -> None:
        #データ表示
        print('{}:{}番'.format(self.__name, self.__id))

oda = Commander('織田信長')#識別番号は１
toyotomi = Commander('豊臣秀吉')#識別番号は２
tokugawa = Commander('徳川家康')#識別番号は３

print('oda.id() = {}'.format(oda.id()))
print('toyotomi.id() = {}'.format(toyotomi.id()))
print('tokugawa.id() = {}'.format(tokugawa.id()))

print('Commander.max_id() = {}'.format(Commander.max_id()))
print('oda.max_id() = {}'.format(oda.max_id()))