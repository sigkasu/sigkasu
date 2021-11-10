#ペットクラス
class Pet:
    #ペットクラス
    def __init__(self, name: str, master: str) -> None:
        #コンストラクタ
        self._name = name
        self._master = master

    def introduce(self) -> None:#Ｄ
        #自己紹介
        print('僕の名前は{}です！'.format(self._name))
        print('ご主人様は{}です！'.format(self._master))
    
    def __str__(self) -> str:#Ａ
        #文字列化
        return self._name + ' <<' + self._master + '>>'

    def print(self) -> None:#Ｂ
        #表示(__str__が返却する文字列を表示して改行)
        print(self.__str__())

class RoboPet(Pet):
    #ロボットペットクラス
    def __init__(self, name: str, master: str, type_no: str) -> None:
        super().__init__(name, master)
        self._type_no = type_no

    def introduce(self) -> None:
        #自己紹介
        print('◆僕はロボット。名前は{}。'.format(self._name))
        print('◆型番は{}。'.format(self._type_no))
        print('◆僕の主人は{}。'.format(self._master))

    def __str__(self) -> str:
        #文字列化
        return(self._name + ' [[' + self._type_no + ']]'
                          + ' <<' + self._master + '>>')
    
    def work(self, sw: int) -> None:
        if   sw == 0: print('掃除します。')
        elif sw == 1: print('洗濯します。')
        elif sw == 2: print('炊事します。')

#ペットクラス群のテスト
kurt = Pet('kurt', 'アイ')
kurt.introduce()
print(kurt)

r2d2 = RoboPet('R2D2', 'ルーク', 'R2')
r2d2.introduce()
print(r2d2)

def self_introduce(obj: object) -> None:
    #objに対して自己紹介をお願いする
    obj.introduce()

self_introduce(kurt)
self_introduce(r2d2)

#kurtはPet型インスタンス
kurt.print()

#r2d2はRobopet型インスタンス
r2d2.print()
r2d2.work(1)