#ペットクラス
class Pet:
    #ペットクラス
    def __init__(self, name: str, master: str) -> None:
        #コンストラクタ
        self._name = name
        self._master = master

    def introduce(self) -> None:　　　　　　　　　　　　　　  #Ｄ
        #自己紹介
        print('僕の名前は{}です！'.format(self._name))
        print('ご主人様は{}です！'.format(self._master))
    
    def __str__(self) -> str:                               #Ａ
        #文字列化
        return self._name + ' <<' + self._master + '>>'

    def print(self) -> None:                                #Ｂ
        #表示(__str__が返却する文字列を表示して改行)
        print(self.__str__())

#ペットクラスのテスト
kurt = Pet('kurt', 'アイ')                                  #Ｃ
kurt.introduce()                                            #Ｄ
print(kurt)                                                 #Ｃ'
print('str(Kurt) = ' + str(kurt))                           #Ａ'
kurt.print()                                                #Ｂ'