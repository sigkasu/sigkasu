class Member:
    def __init__(self, no: int, name: str, weight: float) -> None:
        self.__no = no
        self.__name = name
        self.__weight = weight

    def lose_weight(self, loss: float) -> None:
        self.__weight -= loss

    def print(self) -> None:
        print('{}：{} {}kg'.format(self.__no, self.__name, self.__weight))

    @property
    def weight(self) -> float:
        return self.__weight

    @weight.setter
    def weight(self, weight: float) -> None:
        self.__weight = weight if weight > 0.0 else 0.0

yamada = Member(15, '山田太郎', 72.7)

yamada.weight = 67.3
print('yamada.weight =', yamada.weight)