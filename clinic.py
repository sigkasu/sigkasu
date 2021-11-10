class Human():
    def __init__(self, name):
        self.name = name
class Player(Human):
    def __init__(self, name, player_id, job):
        super().__init__(name)
        self.job = job
        self.player_id = player_id
class Guild():
    def __init__(self):
        self.players_list = []
    
    def show_waiting_count(self):
        print('ただ今の加入人数は{}人です。'.format(len(self.players_list)))
    
    def joined(self, player):
        if self._check_joined(player):
            print('{}さんはすでに加入済みです。'.format(player.name))
        else:
            print('{}さん加入完了'.format(player.name))
            self.players_list.append(player)
        
    def diagonsis(self, player_id=None):
        player = None
        if player_id == None:
            if len(self.players_list)>0:
                player = self.players_list[0]
        else:
            for p in self.players_list:
                if p.player_id == player_id:
                    player = p
        
        if player == None:
            print('申請中のプレイヤーがいません。')
        else:
            print('{}さん、ジョブは{}ですね。'.format(player.name, job))
            print('確認しました。ようこそ「CToD」へ！。')
            self.players_list.remove(player)
        
    def _check_joined(self, player):
        for p in self.players_list:
            if p.player_id == player.player_id:
                return Ture
        return False
CToD = Guild()

players = [['Jun Const', '001', '暗黒騎士'],
           ['Jango sotherland', '002', '黒魔導士'],
           ['May Einzbern', '003', '黒魔導士'],
           ['Motosho Dolohov', '004,', '忍者'],
           ['Sooma Ringo', '005', '竜騎士'],]

for p in players:
    name, player_id, job = p

    player = Player(name, player_id, job)

    CToD.joined(player)

CToD.show_waiting_count()

me = Player('Alre Ar', '006', '白魔導士')
CToD.joined(me)
CToD.show_waiting_count()
CToD.diagonsis()
CToD.show_waiting_count()

CToD.diagonsis(player_id='006')
CToD.show_waiting_count()