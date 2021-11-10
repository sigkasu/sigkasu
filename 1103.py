class Member:
    def __init__(self, no: int, name: str, weight: float) -> None:
        self.__no = no
        self.__name = name
        self.__weight = weight

    def lose_weight(self, loss: float) -> None:
        self.__weight -= loss

    def print(self) -> None:
        print('{}：{} {}kg'.format(self.__no, self.__name, self.__weight))

yamada = Member(15, '山田太郎', 72.7)
sekine = Member(37, '関根信彦', 65.3)

yamada.lose_weight(3.5)
sekine.lose_weight(5.3)

yamada.print()
sekine.print()