<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();

        DB::table('catalogs')->insert([
            [
                'name' => 'Vegetables'
            ],
            [
                'name' => 'Fruits'
            ],
            [
                'name' => 'Juices'
            ],
            [
                'name' => 'Dried'
            ]
        ]);

        //

        DB::table('products')->insert([
            [
                'name' => 'Ớt hiểm trái túi 50gr',
                'price' => '3000',
                'image' => 'ot-hiem-trai.jpg',
                'catalog_id' => '1',
                'description' => 'Với vị cay nồng, thơm, kích thích vị giác của người ăn, ớt là một trong những gia vị không thể thiếu trong nấu ăn cũng như mâm cơm của người Việt. Ớt hiểm luôn giữ được độ tươi mỗi ngày, được nuôi trồng theo quy trình nghiêm ngặt, bảo đảm các chỉ tiêu về an toàn và chất lượng.Ớt mang một vị cay đặc trưng, cùng với hành, tỏi, và các loại rau nêm khác trở thành nguyên liệu không thể thiếu trong mỗi món ăn, giúp các món ăn cay nồng, dậy mùi thêm phần hấp dẫn. Người ta có thể dùng ớt ở bất kể món ăn nào nếu muốn có thêm vị cay cay the the, có người còn ăn ớt sống, mỗi bữa cơm hai trái như thói quen để kích thích vị giác, giúp ăn ngon miệng hơn. Ớt có nhiều loại, nhưng phải nói là cay nhất thì chỉ có ớt hiểm, chính là loại quả ớt thường mọc quả có 3 màu trắng, đỏ, vàng trên cùng một cây.Ngoài ra, ớt còn có nhiều công dụng chữa bệnh rất tốt như giúp giảm đau, cải thiện hệ tuần hoàn máu, giúp ngủ ngon, giảm cân, chống ung thư, có lợi cho bệnh tiểu đường.',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Chanh túi 500gr',
                'price' => '15000',
                'image' => 'chanh.jpg',
                'catalog_id' => '1',
                'description' => 'Chanh túi 500g với từng trái to, tròn và mọng nước, chanh giúp tạo nên vị chua đậm đà cho nhiều món ăn hay nước uống, khiến cho nhiều người thích mê. Chanh có thể làm nước đá chanh giải nhiệt mùa hè, tạo nên vị chua cho các món như canh chua, lẩu chua,.... Bên cạnh các loại hành, tỏi, rau nêm thì chanh là một nguyên liệu không thể thiếu giúp tăng thêm hương vị cho nhiều món ăn với vị chua đặc trưng cực hấp dẫn. Từ lâu chanh trở thành người "bạn nhà bếp" của mỗi người, người ta thích chanh không chỉ vì vị chua thanh tự nhiên mà còn nhờ hương thơm đặc trưng.Ngoài những lợi ích về chế biến món ăn, chanh còn rất nhiều tác dụng không ngờ khác: Làm đẹp, cải thiện sức khỏe hay vệ sinh nhà cửa, đồ vật hằng ngày. Ngoài ra, chanh còn chứa nhiều chất chống oxy hoá, nhờ đó mà hạn chế các bênh ung thư, tiểu đường cực hiệu quả. Các vitamin C có trong chanh giúp cải thiện sức khoẻ cho da, giúp da tươi tắn rạng rỡ hơn',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Cải thìa 4KFarm gói 500gr',
                'price' => '9000',
                'image' => 'rau-cai-thia-4kfarm.jpg',
                'catalog_id' => '1',
                'description' => 'Cải thìa 4KFarm gói 500g là sản phẩm rau sạch, với ưu điểm 4 KHÔNG được các chị em nội trợ ưa chuộng và tin dùng như không thuốc trừ sâu, không chất tăng trưởng, không chất bảo quản và không biến đổi gen, mang tới giống rau sạch, rau chất lượng. 4KFarm là THÀNH VIÊN MỚI của tập đoàn Thế Giới Di Động, tiền thân là Vifarm. Đội ngũ chuyên gia về nông nghiệp của 4KFarm chuyển giao công nghệ và hỗ trợ nông dân trồng rau an toàn 4 KHÔNG và thu mua 100% sản lượng rau an toàn này cung cấp độc quyền cho chuỗi Bách Hóa Xanh. Cải thìa 4KFarm (hay cải bẹ trắng) còn có tên là bạch giới tử thuộc họ cải cùng họ với cải thảo, cải bẹ xanh. Đây là loại rau chứa nhiều thành phần dinh dưỡng dễ chế biến, ăn ngon miệng. Đặc biệt, rau cải thìa cũng mang đến nhiều lợi cho sức khỏe như phòng ngừa bệnh đục nhân mắt, ngăn ngừa ung thư,...',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Nấm kim châm Hàn Quốc gói 150gr',
                'price' => '10000',
                'image' => 'nam-kim-cham.jpg',
                'catalog_id' => '1',
                'description' => 'Nấm kim châm Hàn Quốc được nuôi trồng và đóng gói theo những tiêu chuẩn nghiêm ngặt, bảo đảm các tiêu chuẩn xanh - sạch, chất lượng và an toàn với người dùng. Sợi nấm dai, giòn và ngọt, khi nấu chín rất thơm nên thường được lăn bột chiên giòn, nấu súp hoặc để nướng ăn kèm. Nấm là loại thực phẩm tuy có hàm lượng vitamin và khoáng chất chỉ ngang bằng các loại rau xanh nhưng nó lại chứa nhiều loại chất dinh dưỡng cần thiết cho cơ thể trong đó có vitamin D là dưỡng chất mà khó tìm thấy trong rau hoặc một số loại thực phẩm khác. Nấm kim châm cũng là một trong số những nguồn vitamin, khoáng chất họ nấm, theo nghiên cứu chỉ với 65g nấm kim châm cung cấp chất dinh dưỡng cần thiết cho cơ thể. Nấm là loại thực phẩm giàu dinh dưỡng, tốt cho sức khỏe nhưng vẫn có nhiều loại nấm không ăn được và có thể là mối nguy hại cho sức khỏe, vì thế khi mua nấm cần biết cách lựa nấm để có thể chọn được những cây nấm tươi ngon nhất. Cũng như các loại nấm khác, nấm kim châm cũng thế, nếu không biết cách để chọn lựa nấm kim châm thật kỹ hoặc cách chế biến sao cho đúng cũng sẽ có những ảnh hưởng không tốt đến sức khỏe của bạn.',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Cần tây gói 200gr',
                'price' => '8000',
                'image' => 'can-tay-tui.jpg',
                'catalog_id' => '1',
                'description' => 'Cần tây của Bách hóa Xanh được nuôi trồng và đóng gói theo những tiêu chuẩn nghiêm ngặt, bảo đảm các tiêu chuẩn xanh - sach, chất lượng và an toàn. Vị giòn ngọt, có chút hăng nhẹ nhưng cần tây hỗ trợ rất tốt cho người đang ăn kiêng giảm cân. Thường được dùng trong các món xào hoặc ép lấy nước. Cần tây là loại rau quen thuộc trong bữa ăn hàng ngày, không chỉ giúp món ăn thêm phần thơm ngon mà còn mang lại nhiều lợi ích cho sức khỏe. Theo chuyên gia dinh dưỡng Megan Ware, trong cần tây chứa gần 95% nước cùng nhiều vitamin, protein và chất khoáng. Đặc biệt, hàm lượng vitamin K trong cần tây rất cao. Bên cạnh đó, cần tây chứa hàm lượng chất xơ phong phú, giúp ích cho quá trình đào thải độc tố ra ngoài cơ thể. Cần tây sau khi mua về mang đi rửa sạch, rồi cắt thành từng khúc nhỏ to tùy theo sở thích hoặc tùy theo yêu cầu của món cần chế biến.',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Rau má gói 200gr',
                'price' => '8000',
                'image' => 'rau-ma.jpg',
                'catalog_id' => '1',
                'description' => 'Rau má gói 200g tươi ngon vô cùng, nấu được nhiều món ngon và mang lại nhiều lợi ích hữu dụng trong làm đẹp mà chị em nào cũng thích. Rau má xay sinh tố thì mát, đẹp da, rau má đắp mặt nạ thì giúp trị mụn, có thể nói đây là món rau không thể thiếu trong bếp của các chị em. Rau má là loại rau mang đến nhiều công dụng cho sức khỏe của gia đình bạn như: giải độc gan, điều trị táo bón, bệnh tim mạch, làm đẹp da và tăng cường sức đề kháng cho sức khỏe,… rau má có thể dùng làm sinh tố uống giải nhiệt mùa hè, đồng thời cũng dùng để chế biến thành nhiều món ăn ngon hấp dẫn.',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Giá đậu xanh gói 300gr',
                'price' => '8000',
                'image' => 'gia-dau-xanh.jpg',
                'catalog_id' => '1',
                'description' => 'Giá đậu xanh của Bách hóa Xanh được nuôi trồng và đóng gói theo những tiêu chuẩn nghiêm ngặt, bảo đảm các tiêu chuẩn xanh - sạch, chất lượng và an toàn với người dùng. Giá giòn, ngọt thường được dùng làm rau ăn kèm cho các món có nước như bún, phở hoặc nấu canh chua, xào với thịt. Giá đậu xanh hay còn gọi là giá đỗ, là một trong những nguồn thực phẩm rau quen thuộc trong các món ăn của nhiều gia đình Việt Nam. Giá đậu xanh có tính hàn, vị ngọt rất nhẹ vì thế mang đến cho người dùng cảm giác dễ chịu, giúp thanh lọc và làm mát cơ thể. Giá đỗ là một trong những nguồn thực phẩm có nguồn gốc thực vật, rất giàu chất dinh dưỡng, giàu vitamin đặc biệt là vitamin C, E. Bên cạnh đó, chúng còn chứa nhiều khoáng chất amino acid, protein và chất có nguồn gốc thực vật (phytochemicals) rất bổ dưỡng cho con người. Một số lợi ích của việc ăn giá đỗ có thể kể đến như: tăng cường hormone cho nữ, giải được nhiều loại chất độc tố phát sinh trong quá trình ăn uống, sinh hoạt con người, trị các bệnh lý như bệnh đầy bụng, phân sống, khan tiếng,...',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Cải bó xôi gói 300gr',
                'price' => '9000',
                'image' => 'cai-bo-xoi.jpg',
                'catalog_id' => '1',
                'description' => 'Với công dụng tuyệt vời, có thể kể đến như chống ung thư, chống viêm, ngăn ngừa bệnh tuyến tiền liệt, hỗ trợ giảm cân, làm đẹp da, sáng mắt,.... Cải bó xôi của Bách hóa xanh được trồng tại Đà Lạt tự tin mang đến cho bạn những món ăn đầy đủ dinh dưỡng, hấp dẫn và thanh mát. Cải bó xôi hay còn được gọi là rau Bina, là một loại rau được ưa chuộng ở rất nhiều nơi trên thế giới bởi những giá trị dinh dưỡng mà nó mang lại. Một số công dụng tuyệt vời của cải bó xôi có thể kể đến như chống ung thư, chống viêm, ngăn ngừa bệnh tuyến tiền liệt, hỗ trợ giảm cân, làm đẹp da, sáng mắt,... Cải bó xôi được sử dụng để chế biến thành nước ép hoặc kết hợp với các nguyên liệu khác để làm ra món sinh tố, giúp giảm cân và hỗ trợ tiêu hóa. Ngoài ra, cải bó xôi cũng được chế biến thành những món ăn ngon cho gia đình khi kết hợp với thịt heo, nấm, hải sản các loại,...',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Bắp cải thảo gói 500gr (1 bắp)',
                'price' => '10000',
                'image' => 'bap-cai-thao.jpg',
                'catalog_id' => '1',
                'description' => 'Bắp cải thảo của Bách hóa Xanh được trồng tại Lâm Đồng và đóng gói theo những tiêu chuẩn nghiêm ngặt, bảo đảm các tiêu chuẩn xanh - sach, chất lượng và an toàn với người dùng.Bẹ lá to, giòn, ngọt thường được dùng để nấu canh, xào chung với rau củ hoặc để muối kim chi. Cải thảo là một loại rau gần như là phổ biến đối với tất cả mọi người. Bắp cải thảo còn có nhiều tên gọi khác như: cải bao, cải cuốn, bắp cải tây,.. Cải thảo có kích thước khá dài khoảng 20 - 30cm, lá mọc cuộn vào nhau thành một kết cấu chặt chẽ và chụm lại ở gốc khá giống với bắp cải (bắp sú) Kết cấu của một cây cải thảo hình trụ dài, hơi thuôn nhọn ở phần đầu. ể chế biến được các món ngon từ cải thảo thì bạn cũng phải biết cách chọn cải thảo đó nha, chọn được những bắp cải thảo ngon sẽ giúp cho món ăn của bạn hấp dẫn hơn rất nhiều. Cải thảo cũng giống với các loại rau khác, có thể sử dụng phổ biến trong bữa ăn hàng ngày, có thể kể đến một số món ăn chế biến từ cải thảo như: canh cải thảo, cải thảo cuốn thịt, cải thảo xào,... Ngoài ra, khi nhắc đến cải thảo thì bạn sẽ nhớ ngay đến món ăn đặc sản của Hàn Quốc đó chính là kim chi, cay cay, chua chua kích thích vị giác vô cùng.',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Rau thơm các loại gói 200gr',
                'price' => '12000',
                'image' => 'rau-thom.jpg',
                'catalog_id' => '1',
                'description' => 'Rau thơm các loại gói 200g tại Bách hoá XANH bao gồm rau kinh giới, rau húng, rau diếp cá,... Đây là loại rau không thể thiếu giúp tạo thêm hương vị cho các món ăn như bánh xèo, bánh khọt, bánh ướt,... Rau thơm tại Bách hoá XANH tươi ngon, xanh mơn mởn. Rau thơm các loại gói 200gr (hay gọi là rau gia vị) gồm rau kinh giới, rau húng trắng, rau diếp cá. Kết hợp ăn rau khác nhau tương ứng với từng món ăn khác nhau làm gia tăng hương vị cho món ăn, giúp cho món ăn ngon và không bị ngán. Hoặc được sử dụng như một phương pháp điều trị bệnh: mụn nhọt, sưng tuyến vú, điều trị cảm mạo, ho, dị ứng, rôm sẩy ở trẻ nhỏ, cầm máu, điều trị các bệnh phát ban, tốt cho tim mạch.... Rau thường được dùng cho hai mục đích chính: Ăn sống, rau thơm có tinh dầu cay nên hay được phối trộn với các loại rau mát khác như giá đỗ, bắp chuối thái mỏng, xà lách, rau má. Gia vị cho các món ăn: nhiều loại rau thơm được gia vào các món ăn như một thứ gia vị, tùy theo nguyên liệu chính để chế biến món ăn mà người nội trợ thường có kinh nghiệm riêng cho các loại rau thơm khác nhau như: bún đậu mắm tôm, hoặc bún ốc, bún riêu cua, bún chả, lòng lợn, phở cuốn,...',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Rau muống nước gói 500gr',
                'price' => '11500',
                'image' => 'rau-muong-nuoc.jpg',
                'catalog_id' => '1',
                'description' => 'Rau muống nước của Bách hóa Xanh được nuôi trồng và đóng gói theo những tiêu chuẩn nghiêm ngặt, bảo đảm các tiêu chuẩn xanh - sach, chất lượng và an toàn với người dùng. Vị giòn, ngọt, chứa nhiều dinh dưỡng đặc biệt là sắt nên thường được sử dụng cho các món xào, luộc hoặc nhúng lẩu. Rau muống gồm hai loại chính là rau muống trắng và rau muống tía, do đặc tính sinh trưởng của hai giống khác nhau, một cây thì phát triển trên cạn, một cây thì trồng hoặc mọc tự nhiên dưới nước nên người ta thường gọi là rau muống cạn và rau muống nước. Rau muống cũng như các loại rau khác có giá trị dinh dưỡng cao, chứa nhiều Nước, Protit, Gluxit, Xenluloza, Tro và nhiều Muối khoáng như Canxi, Photphos, Sắt, cùng một số Vitamin có lợi cho sức khỏe như Vitamin C, Vitamin B1, Vitamin B2, Caroten, Citamin. Rau muống nước nhiều lá, thân giòn ngọt ăn thích vô cùng. Nhiều người thích ăn rau muống nhiều lá thì có thể chọn rau muống nước để xào, nhúng lẩu, nấu canh,.... Rau muống nếu không biết sơ chế sẽ còn nhiều mủ rất dễ dính tay và có khi có cả vị chát sau khi chế biến. Nếu chẳng may mủ rau muống dính vào tay, chỉ cần dùng nước cốt chanh hoặc một vài thủ thuật khác là tẩy sạch mủ rau muống khó chịu. Sau đó tiến hành lặt rau muống, loại bỏ những phần già và dai, ngâm với nước muối khoảng 3 phút sau đó rửa lại với nước sạch.',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Lá giang gói 200gr',
                'price' => '12000',
                'image' => 'la-giang.jpg',
                'catalog_id' => '1',
                'description' => 'Lá giang gói 200g là một loại rau có vị chua chua, giúp cho món ăn của bạn có vị chua ngon đậm đà vô cùng. Lá giang có thể dùng làm nguyên liệu cho nhiều món ăn thơm ngon như canh cá lá giang, lẩu gà lá giang,.... thơm ngon, cả nhà ai cũng thích. Lá giang (tên gọi khác: giang chua, chua méo, dây dang) là loại rau đặc sản của các tỉnh miền Trung và miền Nam, thường dùng để xào, nấu canh với thịt bò, thịt gà hay cá nước ngọt. Lá giang có vị chua, tính mát cùng hương thơm đặc trưng. Vì thế, đây không chỉ là rau ăn, lá giang còn là cây thuốc dân gian phòng trị nhiều bệnh. Theo Đông y, đây là loại thảo dược thường được dùng trong bài thuốc và các món ăn chữa viêm đường tiết niệu, sỏi thận, sỏi bàng quang, suy nhược cơ thể và sản hậu băng huyết.',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Rau lang gói 500gr',
                'price' => '11000',
                'image' => 'rau-lang.jpg',
                'catalog_id' => '1',
                'description' => 'Chứa nhiều chất xơ, ngoài ra còn có đạm, tinh bột, nước và các khoáng chất cần thiết như Canxi, Kali, Sắt, Natri và Vitamin C giúp tạo ra collagen giữ cho làn da luôn tươi trẻ, săn chắc, căng đầy sức sống. Rau lang là một trong những loại rau được lựa chọn đầu tiên của người dùng. Nhiều người sử dụng khoai lang mà bỏ qua rau lang, rau lang theo nhiều nghiên cứu lại chính là loại rau chứa nhiều chất dinh dưỡng cần thiết có thể sánh ngang với cải bó xôi. Trong rau lang chứa nhiều chất xơ, ngoài ra còn có đạm, tinh bột, nước và các khoáng chất cần thiết như Canxi, Kali, Sắt, Phốt pho, Natri. Trong 100g rau lang có chứa 11mg Vitamin C giúp tạo ra collagen giữ cho làn da luôn tươi trẻ, săn chắc, căng đầy sức sống. Rau lang dễ ăn, lành tính, phù hợp với khẩu vị của tất cả mọi thành viên trong gia đình. Rau lang có nhiều tác dụng cho sức khỏe như ngăn ngừa bệnh tim, giảm nguy cơ loãng xương, giúp đông máu và giảm đau bụng kinh, hỗ trợ trong việc điều trị ung thư và còn nhiều tác dụng không ngờ khác. Cũng như rau muống, cải bó xôi, cải ngọt hay các loại rau khác, rau lang trước khi đem chế biến cần rửa sạch và ngâm nước muối khoảng 3 - 5 phút để loại sạch lớp nhựa còn có trong rau. Sau đó rửa lại một lần nữa bằng nước thường. Bạn có thể thay muối bằng giấm để ngâm rau lang, giấm cũng có công dụng làm giảm bớt lớp nhựa của rau.',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Rau mồng tơi 4KFarm gói 500gr',
                'price' => '9000',
                'image' => 'rau-mong-toi.jpg',
                'catalog_id' => '1',
                'description' => 'Rau an toàn 4KFarm với tiêu chí 4 KHÔNG, luôn ưu tiên bảo vệ sức khỏe người tiêu dùng. Tính hàn đặc trưng của Rau Mùng Tơi 4KFarm khiến nhiều gia đình ưa chuộng để chế biến các món ăn thanh mát, phù hợp với những ngày hè nóng bức. Hàm lượng dinh dưỡng cao cũng là một trong các đặc điểm nổi bật. 4KFarm là THÀNH VIÊN MỚI của tập đoàn Thế Giới Di Động, tiền thân là Vifarm. Đội ngũ chuyên gia về nông nghiệp của 4KFarm chuyển giao công nghệ và hỗ trợ nông dân trồng rau an toàn 4 KHÔNG và thu mua 100% sản lượng rau an toàn này cung cấp độc quyền cho chuỗi Bách Hóa Xanh. Rau mồng tơi 4KFarm là một trong những loại rau được ưa chuộng trong nhiều gia đình bởi tính hàn và dễ chế biến thành nhiều món ăn. Ngoài ra, những lợi ích tuyệt vời của mồng tơi đối với sức khỏe như giải nhiệt cơ thể, ngăn ngừa loãng xương, trị táo bón, khó tiêu,....',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Rau dền 4KFarm gói 500gr',
                'price' => '9000',
                'image' => 'rau-den.jpg',
                'catalog_id' => '1',
                'description' => 'Rau an toàn 4KFarm với tiêu chí 4 KHÔNG, luôn ưu tiên bảo vệ sức khỏe người tiêu dùng. Vị ngọt mát, thành phần dinh dưỡng cao đặc biệt là hàm lượng sắt dồi dào, Rau Dền 4KFarm sẽ là món canh bổ dưỡng hỗ trợ điều trị nhiều loại bệnh như táo bón, tiểu đường, thiếu máu.... 4KFarm là THÀNH VIÊN MỚI của tập đoàn Thế Giới Di Động, tiền thân là Vifarm. Đội ngũ chuyên gia về nông nghiệp của 4KFarm chuyển giao công nghệ và hỗ trợ nông dân trồng rau an toàn 4 KHÔNG và thu mua 100% sản lượng rau an toàn này cung cấp độc quyền cho chuỗi Bách Hóa Xanh. Rau mồng tơi 4KFarm là một trong những loại rau được ưa chuộng trong nhiều gia đình bởi tính hàn và dễ chế biến thành nhiều món ăn. Ngoài ra, những lợi ích tuyệt vời của mồng tơi đối với sức khỏe như giải nhiệt cơ thể, ngăn ngừa loãng xương, trị táo bón, khó tiêu,....',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Cải dún 4KFarm gói 500gr',
                'price' => '9000',
                'image' => 'cai-dun-4kfarm.jpg',
                'catalog_id' => '1',
                'description' => 'Rau an toàn 4KFarm với tiêu chí 4 KHÔNG, luôn ưu tiên bảo vệ sức khỏe người tiêu dùng. Cải bẹ dún 4KFarm chứa nhiều thành phần dinh dưỡng có lợi cho sức khỏe. Có thể nấu canh, xào, cùng với các thực phẩm khác như thịt, cá,... tạo thành nhiều món ăn hấp dẫn cho cả nhà. 4KFarm là THÀNH VIÊN MỚI của tập đoàn Thế Giới Di Động, tiền thân là Vifarm. Đội ngũ chuyên gia về nông nghiệp của 4KFarm chuyển giao công nghệ và hỗ trợ nông dân trồng rau an toàn 4 KHÔNG và thu mua 100% sản lượng rau an toàn này cung cấp độc quyền cho chuỗi Bách Hóa Xanh. Rau mồng tơi 4KFarm là một trong những loại rau được ưa chuộng trong nhiều gia đình bởi tính hàn và dễ chế biến thành nhiều món ăn. Ngoài ra, những lợi ích tuyệt vời của mồng tơi đối với sức khỏe như giải nhiệt cơ thể, ngăn ngừa loãng xương, trị táo bón, khó tiêu,....',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Nấm bào ngư trắng gói 300gr',
                'price' => '15500',
                'image' => 'nam-bao-ngu.jpg',
                'catalog_id' => '1',
                'description' => 'Nấm bào ngư trắng gói 300g là một lọai nấm thơm ngon, dễ ăn, được rất nhiều người ưa chuộng. Nấm bào ngư trắng là một nguyên liệu quen thuộc cho các bữa cơm trong gia đình với nhiều món ăn ngon như nấm bào ngư xào sả ớt, nấm bào ngư xào thịt,.... Nấm bào ngư là loại nấm có những đặc điểm dễ nhận biết: tai nấm có dạng phễu lệch, phiến nấm mang bào tử kéo dài xuống đến chân, cuống nấm gần gốc có lớp lông nhỏ mịn, nấm bào ngư trắng còn có những tên gọi khác là nấm sò, nấm hương trắng, nấm dai và tên khoa học là Pleurotus florida. Từ lâu nấm bào ngư trắng đã trở thành sản phẩm quen thuộc trong bữa ăn của mỗi gia đình Việt, nấm bào ngư trắng có thể dùng để chế biến thành các món chính hoặc dùng để nhúng lẩu hoặc ăn kèm như các loại rau khác. Nấm bào ngư bạn rửa sạch, sau đó ngâm trong nước muối trong khoảng 10 - 15 phút rồi phơi cho ráo nước. Bạn có thể cắt nhỏ nấm bào ngư thành các đoạn nhỏ vừa ăn hoặc để nguyên cây đều được. Nhưng có một mẹo hay khi chế biến nấm bào ngư trắng chính là khi cắt nhỏ bạn nên cắt làm 4 dọc theo thân nấm đề vừa có kích thước nhỏ vừa miệng vừa giữ được các giá trị dinh dưỡng của nấm bào ngư sau giai đoạn sơ chế.',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Rau ngót gói 500gr',
                'price' => '16500',
                'image' => 'rau-ngot.jpg',
                'catalog_id' => '1',
                'description' => 'Rau ngót là loại rau xanh rất được ưa chuộng tại Việt Nam có tính mát, giúp giải nhiệt, giải độc cho cơ thể cùng với đó cung cấp nhiều chất xơ và vitamin. Rau ngót gói 500g tươi sạch, chất lượng tại Bách hóa XANH tiện lợi, an toàn cho bạn và gia đình những bữa ăn ngon và dinh dưỡng. Rau ngót là một loại rau phổ biến, thông dụng trong bữa ăn của người Việt. Rau ngót dễ trồng, dễ sống ở mọi nơi. Thành phần dinh dưỡng của rau ngót chứa lượng đạm thực vật cao nên rau ngót được khuyên dùng thay thế đạm động vật. Rau ngót có ngọt, mát, ăn vừa thanh nhiệt cơ thể, vừa thơm  ngon và dinh dưỡng. Rau ngót không chỉ thơm ngon, dễ ăn mà nó còn chứa rất nhiều chất xơ, vitamin, chất khoáng. Chất dinh dưỡng và vi chất: Canxi 169mg; Sắt 2,7mg; Magiê 123mg; Mangan 2.400mg; Phospho 65 mg; Kali 457mg; Natri 25mg; Kẽm 0,94mg; Đồng 190μg. Vitamin: Vitamin C 185mg và vitamin A 6.650μg.',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Gừng túi 100gr (1-2 củ)',
                'price' => '6500',
                'image' => 'gung.jpg',
                'catalog_id' => '1',
                'description' => 'Gừng là một loại củ có rất nhiều công dụng đối với chúng ta. Ngoài là gia vị trong nấu ăn hàng ngày, chúng còn có thể dùng trong làm đẹp, làm thuốc cũng cực tốt. Có thể kể đến một số lợi ích của gừng như: làm ấm cơ thể, trừ hàn, tiêu đàm, dịu ho, cầm máu,.... Gừng là một loài thực vật hay được dùng làm gia vị, thuốc. Trong củ gừng có các hoạt chất: Tinh dầu zingiberen, chất nhựa, chất cay, tinh bột. Chính tinh dầu này làm món ăn thơm ngon hơn, khử đi mùi tanh của thịt cá. Không những vậy, gừng có vị cay, tính ôn, kích thích vị giác, tạo cảm giác thèm ăn, khiến bữa ăn thêm ngon miệng. Bên cạnh đó những lợi ích từ gừng như: làm ấm cơ thể, trừ hàn, tiêu đàm, dịu ho, cầm máu, giúp giảm các cơn đau cơ, viêm khớp, thấp khớp, đau đầu hay đau nửa đầu. Cạo lớp vỏ gừng với muỗng dễ dàng. Đặt gừng vào ngăn đá tủ lạnh trong 2 giờ. Gừng khi được đông lạnh lớp vỏ sẽ mất đi một phần độ ẩm khiến chúng ít bám vào thân, do đó dễ bong tróc hơn rất nhiều. Rã đông gừng ở nhiệt độ phòng khoảng 5 phút. Nếu cần dùng gấp bạn có thể ngâm chúng trong nước 2 phút. Thay vì dùng dao cắt vỏ như trước bạn có thể dùng muỗng cạo nhẹ, lớp vỏ sẽ tự bong tróc nhanh chóng.',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Gò rí gói 100gr',
                'price' => '6000',
                'image' => 'ngo-ri.jpg',
                'catalog_id' => '1',
                'description' => 'Ngò rí là loại rau nêm có nhiều công dụng tuyệt vời trong lĩnh vực nấu nướng, làm đẹp và sức khỏe con người. Ngò rí tại Bách hoá XANH là một trong những nguyên liệu tươi ngon và không thể thiếu trong việc làm tăng hương vị của món ăn. Ngò rí hay còn gọi là ngò, rau mùi, ngò suôn, mùi ta,... có mùi thơm, thường được trồng làm rau nêm và gia vị, giúp cho món ăn có mùi thơm hấp dẫn, dễ ăn. Kết hợp ăn rau khác nhau tương ứng với từng món ăn khác nhau làm gia tăng hương vị cho món ăn. Hoặc được sử dụng như một phương pháp điều trị bệnh: Rau mùi có chứa nhiều vitamin A, C có lợi cho hệ miễn dịch của cơ thể, uống nước rau mùi có thể làm hạ sốt, trị cảm cúm, bảo vệ tim mạch, lọc máu,.... Rau thường được dùng cho hai mục đích chính: Ăn sống, húng có tinh dầu cay nên hay được phối trộn với các loại rau mát khác như giá đỗ, bắp chuối thái mỏng, xà lách, rau má. Gia vị cho các món ăn: nhiều loại rau thơm được gia vào các món ăn như một thứ gia vị, tùy theo nguyên liệu chính để chế biến món ăn mà người nội trợ thường có kinh nghiệm riêng cho các loại rau thơm khác nhau như: bún đậu mắm tôm, bún bò Huế, bún riêu cua, bún chả, lòng lợn, phở cuốn,...',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Hành lá gói 100gr',
                'price' => '6000',
                'image' => 'hanh-la.jpg',
                'catalog_id' => '1',
                'description' => 'Là một loại rau rất quen thuộc với chị em nội trợ. Hành lá thường được dùng để làm gia vị cho các món ăn, làm tăng hương vị lên gấp nhiều lần. Hầu như các món ăn đều có thể thêm hành lá vào nếu thích. Ngoài ra, hành lá còn có thể dùng để hỗ trợ trị một số bệnh nhẹ như: cảm sốt, nhức đầu,.... Hành lá hay gọi là hành hoa, hành hương, hành ta. Hành lá có mùi thơm, vị ngọt và cay the nhè nhẹ khi ăn sống, do đó chúng hay được sử dụng với vai trò là rau gia vị cho các món ăn. Ngoài ra, hành lá cũng xuất hiện trong một số bài thuốc đông y nhằm phòng hoặc chữa một vài căn bệnh nào như: giải quyết dứt điểm triệu chứng cảm sốt, nhức đầu, ăn uống không tiêu, ngăn ngừa tiểu đường, tốt cho mắt, nâng cao hoạt động hệ tim mạch,...',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Sả cây gói 200gr',
                'price' => '5000',
                'image' => 'sa-cay.jpg',
                'catalog_id' => '1',
                'description' => 'Sả cây gói tại Bách hoá XANH tươi ngon, cây to vô cùng. Sả giúp làm tăng hương vị cho món ăn, không chỉ giúp món ăn thêm đậm đà thơm ngon mà còn giúp cho món ăn dậy mùi thơm và có nhiều tác dụng tuyệt vời cho sức khoẻ nên rất được ưa chuộng. Sả không chỉ là một loại rau gia vị, giúp làm tăng hương vị cho món ăn và kích thích vị giác mà còn chứa nhiều công dụng khác trong đời sống như đuổi muỗi, tạo hương thơm, khử mùi hôi, giúp giải cảm, hạ sốt, xả stress,.... Tùy thuộc vào mục đích sử dụng mà người dùng có thể sơ chế sả bằng nhiều cách khác nhau như băm nhuyễn, cắt khúc. Nếu bạn muốn dùng sả trong việc chế biến các món ăn thì rửa sạch và để sả ráo nước, sau đó băm nhuyễn sả. Ngoài ra, nếu dùng sả trong việc xông hơi, giải cảm thì cắt sả thành từng khúc rồi cho vào nước nóng. Sả được dùng nhiều trong việc chế biến các món kho, chiên, xào bởi cách làm này sẽ phát huy công dụng tạo mùi, tạo độ cay, loại bỏ mùi tanh và kích thích vị giác một cách tuyệt đối. Vì thế, các loại nguyên liệu thường được kết hợp với sả như cá, thịt heo, gà, nghêu,... Một số món ăn phổ biến được chế biến từ sả như thịt kho sả ớt, nghêu hấp sả ớt, lẩu gà hầm sả. Ngày nay, sả không chỉ được dùng để chế biến món ăn mà còn được dùng để pha chế thành nhiều loại thức uống độc đáo, mới lạ như trà đào cam sả, nước chanh sả cho buổi trưa nóng nực, hay đơn giản với trà sả chanh mật ong nóng giúp chữa bệnh mất ngủ, chống ung thư, cải thiện hệ tiêu hóa, thải độc và giảm cân.',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Me chua vắt hộp 68gr',
                'price' => '4000',
                'image' => 'me-chua-vat.jpg',
                'catalog_id' => '1',
                'description' => 'Được đóng gói thành từng hộp gọn gàng và ngăn nắp, có công dụng làm gia vị trong các món ăn như canh chua. Ngoài ra, các dưỡng chất trong me cũng mang đến rất nhiều dưỡng chất cực tốt cho cơ thể như: giảm mỡ, ngừa thiếu máu, cao huyết áp,... Me chua vắt là thực phẩm được dùng rất phổ biến trong việc chế biến các món ăn, là rau gia vị dùng để chế biến nên nhiều món ăn ngon, hấp dẫn mà nó còn rất tốt cho sức khỏe. Nó có công dụng giảm mỡ, ngừa thiếu máu, cao huyết áp,... Sản phẩm được làm sạch, đóng hộp dễ chế biến, bảo quản được lâu, giúp người nội trợ tiết kiệm được nhiều thời gian.',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Nấm hải sản gói 150gr',
                'price' => '21000',
                'image' => 'nam-hai-san.jpg',
                'catalog_id' => '1',
                'description' => 'Nấm hải sản gói 500g được nuôi trồng và đóng gói theo những tiêu chuẩn nghiêm ngặt, bảo đảm các tiêu chuẩn xanh - sạch, chất lượng và an toàn với người dùng. Nấm trắng ngần, ngọt, chứa nhiều chất, hàm lượng dinh dưỡng cao nên thường dùng để nấu cháo hoặc làm rau nhúng lẩu. Nấm hải sản còn có tên gọi khác nấm bạch tuyết. Đây được xem là một loại thực phẩm rất tốt cho sức khỏe bởi nó chứa rất nhiều vitamin và protein. Thực phẩm này còn có rất nhiều tác dụng trong việc ngăn ngừa ung thư, thông gan, tốt cho dạ dày, tăng cường trí lực, giảm quá trình lão hóa, tăng cường hệ miễn dịch của cho mẹ bầu....',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Nấm mỡ nâu hộp 150gr',
                'price' => '65000',
                'image' => 'nam-mo-nau.jpg',
                'catalog_id' => '1',
                'description' => 'Nấm mỡ nâu được nuôi trồng tại Lâm Đồng và đóng gói theo những tiêu chuẩn nghiêm ngặt, bảo đảm các tiêu chuẩn xanh - sạch, chất lượng và an toàn với người dùng. Chứa hàm lượng dinh dưỡng dồi dào, vị nấm ngọt dịu, thịt nấm giòn chắc thích hợp để nấu lẩu, xào cùng rau củ hoặc nấu các loại súp. Nấm mỡ nâu có vị ngọt, béo và giòn, chứa nhiều protein thích hợp cho những người ăn chay, bà bầu và trẻ nhỏ. Nấm mỡ có tính hàn, bổ tý ích khí, nhuận phế hóa đàm giúp giảm mệt mỏi, tốt cho người viêm phế quản mãn tính, viêm gan mãn tính, suy giảm bạch cầu... Đặc biệt, loại nấm này hoàn toàn có thể ăn trực tiếp sau khi rửa sạch mà không cần chế biến bởi chúng được trồng và thu hoạch theo công nghệ Nhật Bản và 100% không chất bảo quản, không sử dụng hóa chất. Nấm mỡ có chứa hoạt chất ergothioneine, lectin giúp chống oxy hoá, cải thiện sự sống cho tế bào, có lợi cho hệ thống miễn dịch. Nấm mỡ giúp ngừa ung thư vú ở phái nữ và ung thư tuyến tiền liệt ở nam. Selen trong nấm giúp tăng hệ vi sinh tốt và tiêu diệt vi khuẩn xấu có hại cho đường tiêu hoá. Nấm mỡ chứa β-glucan và protein giúp ngăn ngừa tình trạng gan nhiễm mỡ, tổn thương gan. Giảm lượng đường trong máu, cải thiện tình trạng rối loạn dung nạp glucose. Ngoài ra, nấm mỡ còn là một nguyên liệu hiệu quả giúp bạn kiểm soát cân nặng, cải thiện trí nhớ và điều trị rối loạn nhận thức.',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Xà lách lô lô xanh gói 500gr',
                'price' => '15000',
                'image' => 'xa-lach-lo-lo-xanh.jpg',
                'catalog_id' => '1',
                'description' => 'Xà lách lô lô xanh của Bách hóa Xanh được nuôi trồng tại Lâm Đồng và đóng gói theo những tiêu chuẩn nghiêm ngặt, bảo đảm các tiêu chuẩn xanh - sach, chất lượng và an toàn với người dùng. Chứa nhiều chất xơ, hàm lượng dinh dưỡng cao, vị ngọt, giòn nên thường dùng làm rau ăn kèm cho các món cuốn. Xà lách lolo xanh có vị ngọt đắng, tính mát và thơm nhẹ, kết cấu lá giòn. Là loại rau chứa nhiều vitamin, khoáng chất, rất tốt cho sức khỏe, được nhiều chị em lựa chọn trong thực đơn bữa ăn gia đình. Có tác dụng giải nhiệt, lọc máu, kích thích tiêu hóa, giảm đau, trị bệnh mất ngủ, chống ho. Loại rau xà lách lolo này thích hợp ăn sống và làm các món salad trộn: xà lách trộn dầu giấm, trộn thịt bò, trứng,...',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Rau đay gói 500gr',
                'price' => '14500',
                'image' => 'rau-day.jpg',
                'catalog_id' => '1',
                'description' => 'Vì có tính hàn cao, lành tính và vị ngọt đặc trưng nên rau đay của Bách hóa Xanh là sự lựa chọn tuyệt vời  dùng để chế biến những món canh vào mùa hè như canh cua rau đay, canh tôm rau đay,... giúp giải nhiệt, thanh mát, tạo cảm giác ngon miệng hơn trong bữa ăn. Rau đay là một trong những loại rau chứa nhiều chất sắt, muối khoáng và vitamin. Vì có tính hàn cao, lành tính và vị ngọt đặc trưng nên rau đay hay được dùng để chế biến món canh vào mùa hè như canh cua rau đay, canh tôm rau đay,... Sự khác biệt của rau đay so với các loại rau khác chính là tính nhớt của nó, chỉ cần bứt vài chiếc lá rồi vò lại bạn sẽ thấy tay mình rất trơn và nhớt. Công dụng: Kích thích ruột vận động, làm mềm phân trị táo bón cực kì hiệu quả. Tăng sức co bóp của tim và giảm nhịp tim bằng với nhịp đập sinh học. Chứa nhiều nước lại có tính hàn cao nên rất tốt trong việc thanh lọc cơ thể, có tác dụng làm mát, trị các bệnh về nhiệt như nóng trong người, nhiệt miệng, chữa say nắng,... Bổ sung nhiều chất dinh dưỡng và canxi, rất tốt cho quá trình ăn dặm của trẻ. Có khả năng kháng viêm tự nhiên, chống viêm, sưng ở các bộ phận như bàng quang, đường tiết niệu,...',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Rau tần ô gói 500gr',
                'price' => '25000',
                'image' => 'rau-tan-o.jpg',
                'catalog_id' => '1',
                'description' => 'Rau tần ô gói 500g tại Lâm Đồng còn gọi là rau cải cúc, là một loại rau xanh vô cùng tươi ngon, rất dễ ăn và còn giúp trị ho, chữa tiêu chảy siêu hiệu quả. Rau tần ô sau khi mua về rửa sạch là có thể chế biến thành các món như canh rau tần ô thịt, canh rau tần ô tôm, rau tần ô xào thịt,... Rau tần ô hay còn gọi là rau cải cúc, là một loại rau có tính hàn mát, vị ngọt nhẹ, rất phù hợp cho việc chế biến thành các món canh rau cho gia đình. Ngoài ra, rau tần ô cũng mang đến nhiều lợi ích cho sức khỏe con người như trị ho, trị đau đầu, lợi tiểu, chữa tiêu chảy,... Rau tần ô thích hợp với khẩu vị của cả gia đình, rau mềm, ngọt, tươi xanh, nấu cho bé cũng được mà nấu cho người lớn cũng rất tốt. Rau tần ô khi được nấu cùng với các loại thịt heo, tôm,.. sẽ cho ra những món canh thơm ngon, ngọt thanh và bổ dưỡng như canh rau tần ô nấu với thịt bằm, canh rau tần ô thịt bò,... Rau tần ô cũng được dùng để chế biến thành các món xào như rau tần ô xào tỏi, xào thịt bò,...',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Xà lách xoong Đà Lạt bó 500gr',
                'price' => '18000',
                'image' => 'xa-lach-xoong.jpg',
                'catalog_id' => '1',
                'description' => 'Xà lách xoong Đà Lạt có hương vị tươi mát, ngon ngọt được nhiều người tiêu dùng ưa chuộng. Trong xà lách xoong có chứa hàm lượng chất xơ cao, dinh dưỡng giúp tăng cường sức khỏe, khả năng chống oxi hóa tốt cũng như hỗ trợ chị em trong chăm sóc sắc đẹp. Xà lách xoong (cải xoong) là loại rau cải được khá nhiều người biết đến vì nó ngon và có hương vị đặc biệt. Được trồng tại Đà Lạt nên xanh tươi và ngon hơn xà lách bình thường. Bên cạnh đó xà lách xoong còn chế biến nhiều món ăn ngon hấp dẫn cung cấp được nhiều chế độ dinh dưỡng an toàn. Lợi ích: Cung cấp nguồn calcium, folic, sắt, các vitamin A, C,… dồi dào. Bổ sung các dưỡng chất có lợi cho cơ thể, mang đến sự khỏe mạnh cho người dùng. Có khả năng chống oxi hóa tốt, làm giảm khả năng mắc bệnh mãn tính, có tác dụng ngăn ngừa ung thư. Có lợi cho tim mạch, có lợi cho xương khớp,...',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Hành tím túi 300gr',
                'price' => '18000',
                'image' => 'hanh-tim.jpg',
                'catalog_id' => '1',
                'description' => 'Hành tím là gia vị không thể thiếu trong căn bếp của mỗi gia đình. Hành tím không chỉ giúp món ăn của bạn thêm đậm đà, hấp dẫn mà còn còn có công dụng trong việc chăm sóc sức khỏe. Trong hành tím có chứa rất nhiều chất dinh dưỡng tốt cho sức như: Vitamin C, B6, canxi,... Hành tím không chỉ là một loại rau gia vị giúp tăng hương thơm làm món ăn thêm phần ngon miệng mà chúng còn có công dụng đặc biệt ít ai biết đến. Với một củ hành tím mỗi ngày bạn có thể làm đẹp, đồng thời ngăn ngừa bệnh. Hành tím được trồng ở rất nhiều nơi trên khắp nước ta nhưng nổi tiếng nhất là ở thị xã Vĩnh Châu - Sóc Trăng, huyện đảo Lý Sơn - Quảng Ngãi, huyện Ninh Hải - Ninh Thuận, huyện Gò Công - Tiền Giang.... Lợi ích: Trong củ hành tím có chứa rất nhiều chất dinh dưỡng rất tốt cho cơ thể như: Vitamin C, vitamin B6, biotin, axit folic, chromium, canxi và chất xơ tốt cho sức khỏe. Ngoài ra, hành tím còn chứa nhiều chất có hoạt tính cao như: các hợp chất sulfuric, chromium, prostaglandin, phenoplast, diallyl sulfide, disulphide, trisulphide,… giúp phòng và chữa nhiều bệnh rất hiệu quả. Một số tác dụng của hành tím có thể kể đến trong làm đẹp như: trị mụn trứng cá, liền sẹo, trị mụn cóc và tàn nhan,... Còn đối với sức khoẻ thì hàm tím có một số tác dụng như: Ngừa đau tai, chữa cảm lạnh, cầm máu, trị ong đốt, ngăn ngừa loãng xương,...',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Tỏi cô đơn túi 300gr',
                'price' => '40000',
                'image' => 'toi-co-don.jpg',
                'catalog_id' => '1',
                'description' => 'Tỏi cô đơn là một gia vị không thể thiếu trong gian bếp của mỗi gia đình, Tỏi cô đơn được nuôi trồng theo quy trình công nghệ nghiêm ngặt, bảo đảm các chỉ tiêu về an toàn và chất lượng. Tỏi có hàm lượng dinh dưỡng cao, tăng cường sức miễn dịch cho người sử dụng thường được dùng làm gia vị ướp. Tỏi là một loại gia vị không thể thiếu trong gian bếp của mỗi nhà. Tỏi không những giúp làm tăng hương vị cho món ăn mà còn có nhiều tác dụng trong việc phòng, điều trị một số bệnh hiệu quả. Tỏi cô đơn hay còn được gọi là tỏi một tép, tỏi một nhánh, tỏi mồ côi, tỏi đơn, loại tỏi này được tạo thành do sự đột biến trong quá trình sinh trưởng. Chúng chỉ phát triển được một tép thay vì đẻ ra nhiều tép. Tỏi có thể ăn sống, ngâm giấm hoặc chế biến kèm theo một số món ăn ngon như: rong biển cháy tỏi, đậu phộng rang tỏi ớt, trứng non lòng gà cháy tỏi,... Đặc biệt với tỏi cô đơn thì bạn còn có thể dùng để chế biến tỏi đen - loại thực phẩm vàng cho sức khoẻ.',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Khoai tây túi 500gr (3 - 7 củ)',
                'price' => '12500',
                'image' => 'khoai-tay.jpg',
                'catalog_id' => '1',
                'description' => 'Khoai tây trồng tại Lâm Đồng đã quá quen thuộc với mỗi chúng ta. Loại củ này được xuất hiện thường xuyên trên mâm cơm này có rất nhiều công dụng hữu ích. Nó không chỉ tốt cho sức khỏe, làm đẹp hiệu quả mà còn có rất nhiều tác dụng bổ ích khác. Khoai tây có thể chế biến thành canh, súp, hoặc chiên. Khoai tây thuộc họ cà, là một loại củ đa năng có hàm lượng chất dinh dưỡng cao, vì vậy nhiều hộ gia đình tại Việt Nam đã lựa chọn khoai tây như một món ăn chính trong các bữa ăn hàng ngày. Sở hữu nguồn vitamin và khoáng chất phong phú, khoai tây mang lại nhiều lợi ích cho sức khỏe như kháng viêm, giảm đau, tăng cường hệ miễn dịch, kích thích tiêu hóa,... Khoai tây có vị bột bột, hầm lên ăn rất ngon, phù hợp cho các món ăn dặm của bé yêu. Để lột vỏ khoai tây nhanh, bạn chỉ cần khứa 1 đường vòng quanh khoai tây, luộc sơ và lột vỏ.',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Bí đỏ hồ lô túi 700gr (1 trái)',
                'price' => '10500',
                'image' => 'bi-do-ho-lo.jpg',
                'catalog_id' => '1',
                'description' => 'Còn gọi là bí đỏ hạt đậu, đây là giống bí có ruột rất đặc, ít hả ăn dẻo và ngọt. Bí hồ lô chứa nhiều chất dinh dưỡng và mang lại nhiều lợi ích cho sức khoẻ. Bí hồ lô có thể chế biến thành nhiều món ăn ngon như: sữa bí, canh bí, súp bí,... món nào cũng đều thơm ngon. Bí đỏ là loại củ chứa lượng calo tương đối thấp, do 94% bí đỏ là nước. Bí đỏ cũng chứa nhiều beta-caroten, một loại carotenoid mà cơ thể tổng hợp thành vitamin A. Hơn thế nữa, hạt bí đỏ cũng có thể được sử dụng bởi chúng chứa nhiều chất dinh dưỡng và mang lại nhiều lợi ích cho sức khoẻ. Bí đỏ hồ lô cùng họ nhà bí đỏ nhưng có hình dạng giống như hồ lô. Về mặt dinh dưỡng, bí đỏ hay bí đỏ hồ lô đều giống nhau. Bí đỏ hồ lô sẽ tăng thêm một sự lựa chọn cho những người nội trợ với nhu cầu trang trí món ăn thêm phần bắt mắt. Kĩ thuật trồng bí đỏ hồ lô cũng rất quan trọng trong việc quyết định chất lượng của bí đỏ, những trái bí đỏ dẻo ngọt, đầy dinh dưỡng. Có thể nói trong các loại quả có hàm lượng dinh dưỡng cao thì bí đỏ hồ lô luôn nằm ở vị trí đầu tiên. Trong bí đỏ hồ lô có chứa sắt, kali, phốt pho, protein thực vật, gluxit,.. cùng các axit béo linocleic, vitamin tốt cho sức khoẻ. Bí đỏ rất tốt cho não bộ, nó còn giúp tim khoẻ, mắt sáng, miễn dịch dồi dào làm đẹp da và nhiều người còn ưu ái sử dụng nó trong thực đơn giảm cân. Ăn bí đỏ rất tốt cho não bộ, làm tăng cường miễn dịch, giúp tim khỏe mạnh, mắt sáng, cho giấc ngủ ngon hơn và hỗ trợ cho việc chăm sóc da cũng như làm đẹp, giúp giảm cân.... Trong một quả bí đỏ hồ lô thông thường sẽ chứa: 85-91% là nước, đạm (0.8-2g), chất béo (0.1-0.5g), chất bột đường (3.3-11g) và năng lượng khoảng 85-170kJ/100g.',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Bầu sao trái 500gr - 600gr',
                'price' => '8500',
                'image' => 'bau-sao-trai.jpg',
                'catalog_id' => '1',
                'description' => 'Được nhiều chị em nội trợ chọn mua để chế biến thành các món ăn ngon cho gia đình. Ngoài làm thực phẩm, bầu sao còn có thể dùng trong đông y, có tác dụng lợi tiểu, mát gan, giải độc, làm đẹp da và giảm cân. Bầu có thể chế biến thành các món ăn như: luộc, xào, nấu canh đều rất ngon. Bầu sao là một loại giống rau ăn quả, có nguồn gốc từ Châu Phi, hiện nay được trồng nhiều ở các nước nhiệt đới trong đó có Việt Nam. Công dụng của trái bầu với sức khỏe: Bầu sao có vị ngọt, tính mát, giúp giải nhiệt cơ thể được sử dụng làm một số vị thuốc Đông y có tác dụng lợi tiểu, mát gan, giải độc, làm đẹp da và giảm cân. Có tác dụng nhuận tràng, chống táo bón và thường được sử dụng nhiều trong mùa hè. Bên cạnh đó, hạt bầu cũng được tận dụng đun lấy nước súc miệng chữa bệnh sưng mộng răng, lợi răng lung lay, tụt lợi...',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Dưa leo vỉ 500gr (3 -5 trái)',
                'price' => '10000',
                'image' => 'dua-leo-vi.jpg',
                'catalog_id' => '1',
                'description' => 'Dưa leo trái lớn tươi ngon, được trồng và thu hoạch đảm bảo chất lượng, an toàn cho sức khỏe người sử dụng. Trong dưa leo chứa nhiều chất xơ, vitamin C, E, K, magie,...dễ ăn, dễ phối trộn với các món ăn khác, tốt sức khỏe vừa mang lại hiệu quả làm đẹp rất tốt. Dưa leo khay 500g là một loại quả hơi dài, có màu xanh đặc trưng, là loại quả khoái khẩu của rất nhiều người. Dưa leo với đặc tính giòn giòn, thanh mát, ăn kèm với các món ăn giúp món ăn thơm ngon hơn, không bị ngán. Dưa leo để tủ lạnh, ăn sống, có vị giòn giòn, dưa leo đem ngâm chua ngọt giòn ngon ăn không ngán, dưa leo còn có thể sử dụng đắp mặt nạ, làm đẹp vô cùng hữu dụng. Dưa leo có thể được chế biến thành các món salad tươi, sinh tố, nước ép dưa leo chanh, dưa leo cà rốt, kim chi dưa leo. Bên cạnh việc ăn dưa leo sống cùng với các món mặn thì bạn cũng có thể kết hợp dưa leo với các nguyên liệu thịt heo, thịt gà, trứng, hải sản các loại. Mực xào dưa leo thanh ngọt, giòn dai. Gỏi dưa leo trộn khóm giòn giòn, chua ngọt. Dưa leo xào với thịt bò',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Củ cải trắng túi 500gr (2 - 5 củ)',
                'price' => '9000',
                'image' => 'cu-cai-trang.jpg',
                'catalog_id' => '1',
                'description' => 'Củ cải trắng trồng ở Đà Lạt là một loại rau củ vừa có thể dùng để làm thực phẩm, vừa có thể sử dụng để làm dầu hạt cải. Loại rau củ này chứa rất nhiều vitamin và khoáng chất, tốt cho cơ thể. Một vài công dụng của củ cải trắng có thể kể đến như: giảm cân, hỗ trợ hệ tiêu hoá, tăng cường miễn dịch,.... Củ cải trắng hay còn được gọi là củ cải mùa đông. Đây là một loại rau củ được trồng để làm thực phẩm và dầu hạt. Củ cải trắng có ngoại hình giống với cà rốt nhưng có màu trắng, mùi vị thì hơi ngọt và cay. Cứ trong 100g củ cải trắng thì sẽ có tới 0.6g protein, 3,7g glucid, 1,5g đạm, 40mg canxi, 41mg photpho, 1,1 mg sắt, 1.5g chất xơ. Bên cạnh đó đây còn là loại củ chứa hàm lượng vitamin, acid folic dồi dào giúp cải thiện chức năng của gan và túi mật, tăng cường hệ miễn dịch cho cơ thể và trị những căn bệnh ác tính khác. Bởi những giá trị dinh dưỡng mà nó mang lại, thật không sai khi người ta ví củ cải trắng là “nhân sâm trắng". Củ cải trắng chứa rất nhiều chất dinh dưỡng tốt và cần thiết cho cơ thể. Một vài tác dụng của củ cải trắng có thể kể đến như: Hỗ trợ giảm cân, ngăn ngừa ung thư, cải thiện hệ tiêu hoá, giải độc cơ thể, tăng cường hệ miễn dịch,... Cách chọn mua củ cải trắng',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Thơm gọt vỏ khay 200gr (1-2 miếng)',
                'price' => '9000',
                'image' => 'thom-mieng.jpg',
                'catalog_id' => '1',
                'description' => 'Là một loại trái cây vừa ngon, chua chua ngọt ngọt lại vừa cung cấp rất nhiều chất dinh dưỡng cho cơ thể. Thơm có thể chế biến thành nhiều món ăn khác nhau như: làm nước ép, kho, xào,... mỗi một món sẽ mang lại một hương vị khác nhau. Khóm là một loài trái cây vùng nhiệt đới, có tên khoa học là Ananas comosus. Quả có đặc điểm quả nhiều mắt, thịt màu vàng, vị chua ngọt, dùng để nấu ăn như một loại rau nêm hoặc ăn tươi như một loại trái cây thông thường. Loài quả này đặc biệt có hàm lượng các chất dinh dưỡng cao như các axít hữu cơ, vitamin C, vitamin B1 và các khoáng chất thiết yếu có lợi cho sức khoẻ.',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Hành tây túi 300gr (3 - 6 củ)',
                'price' => '7000',
                'image' => 'hanh-tay.jpg',
                'catalog_id' => '1',
                'description' => 'Hành tây xuất xứ Lâm Đồng là một loại củ phổ biển được sử dụng trong rất nhiều món ăn của người Việt và trên toàn thế giới. Loại rau củ này chứa khá nhiều vitamin và khoáng chất có công dụng cho sức khỏe. Hành tây có thể dùng để chiên, xào, nướng hoặc có thể ăn sống đểu rất ngon. Hành tây là loại củ mọc dưới lòng đất, được trồng phổ biến trên toàn thế giới và có quan hệ gần với hẹ, tỏi và hành lá. Đây là nguyên liệu chủ yếu trong nhiều món ăn, được chế biến rất đa dạng, từ nướng, luộc, chiên, rang, xào, lăn bột hoặc thậm chí là ăn sống. Hành tây chứa khá nhiều vitamin và khoáng chất có công dụng cho sức khỏe như: giúp điều hòa đường huyết, cải thiện sức khỏe xương, ngăn ngừa ung thư, tăng cường hệ miễn dịch,.... Món ăn được chế biến với hành tây: Gà xào hành tây lạ miệng, đưa cơm. Giòn thơm với mực xào hành tây. Bò xào hành tây thơm mềm, thơm ngon. Súp hành tây kiểu Pháp. Ngoài việc sử dụng làm món ăn, hành tây còn sử dụng để vệ sinh nhà cửa, làm sạch vỉ nướng, tẩy mọi vết bẩn trên áo trắng,...',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Khoai mỡ túi 1kg (1 - 2 củ)',
                'price' => '39000',
                'image' => 'khoai-mo.jpg',
                'catalog_id' => '1',
                'description' => 'Là nguyên liệu khá quen thuộc của các chị em khi nấu ăn cho cả gia đình. Với hàm lượng khoáng chất và vitamin có trong khoai mỡ sẽ giúp cải thiện hệ tiêu hoá, giúp nhuận tràng, chữa táo bón rất tốt. Khoai mỡ có thể sử dụng để chế biến thành các món như: canh, bánh khoai mỡ, khoai mỡ chiên giòn,... Giá trị dinh dưỡng có trong khoai mỡ: Trong khoai mỡ chứa rất nhiều tinh bột, chất xơ cùng hàm lượng vitamin và các khoáng chất dồi dào. Cứ 100g khoai mỡ sẽ có khoảng 5.3g chất xơ, 10mg vitamin C, vitamin B6, 0.31mg Kali, Magnesium và Phosphorus. Điểm đặc biệt của khoai mỡ so với các loại củ, quả khác chính là khả năng chuyển hóa tối đa lượng carbonhydrate và điều tiết, tối ưu quá trình chuyển hóa năng lượng nhờ hàm lượng Magnesium dồi dào của mình, hiệu quả trong việc duy trì cân nặng, giảm cân. Ngoài ra nguồn dinh dưỡng dồi dào trong khoai mỡ còn hỗ trợ trong việc điều trị rất nhiều bệnh, vitamin B6 là chất dinh dưỡng rất tốt hỗ trợ cải thiện sức khỏe tim mạch, đồng thời làm giảm huyết áp cho cơ thể, Ăn nhiều khoai mỡ còn giúp nhuận tràng, chống viêm ruột, hàm lượng chất xơ cao trong khoai mỡ còn giúp chữa táo bón rất tốt. Đặc biệt phụ nữ có thể tránh được các hội chứng khó chịu trong giai đoạn mãn kinh bằng cách sử dụng khoai mỡ.',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Bông cải trắng túi 500gr (1 bông)',
                'price' => '30000',
                'image' => 'bong-cai-trang.jpg',
                'catalog_id' => '1',
                'description' => 'Bông cải trắng của Bách hóa Xanh được nuôi trồng tại Lâm Đồng và đóng gói theo tiêu chuẩn nghiêm ngặt, bảo đảm các tiêu chuẩn xanh - sạch, chất lượng và an toàn với người dùng. Hàm lượng dinh dưỡng cao, vị giòn ngọt nên thường được dùng để chế biến các món xào hoặc luộc, giúp tăng cường miễn dịch. Bông cải trắng hay còn gọi là súp lơ trắng là một loại rau họ cải, có giá trị dinh dưỡng rất cao. Đây là một loại rau cực kỳ tốt cho sức khỏe, là nguồn chứa nhiều chất dinh dưỡng quan trọng, có thể làm giảm nguy cơ mắc một số bệnh, bao gồm bệnh tim và ung thư. Ngoài ra, bông cải còn là thực phẩm không thể thiếu trong quá trình giảm cân và cực kỳ dễ dàng để phối hợp với các món ăn khác trong chế độ ăn uống của bạn. Bông cải trắng có phần bông màu trắng gắn khít vào nhau, xốp và hơi dai mềm, bên ngoài có lớp lá bao bọc xung quanh, phiến lá cứng và dày. Gía trị dinh dưỡng của bông cải trắng: Một cup bông cải có 3g chất xơ, chiếm 10% nhu cầu hằng ngày . Chất xơ giúp nuôi các vi khuẩn khỏe mạnh trong ruột, giúp giảm viêm và tăng cường sức khỏe tiêu hóa. Chất chống oxy hóa trong bông cải bảo vệ các tế bào của bạn khỏi các gốc tự do có hại gây viêm. Chất Choline trong súp lơ trắng giúp duy trì màng tế bào, tổng hợp ADN và hỗ trợ trao đổi chất, ngăn ngừa cholesterol tích tụ trong gan. Có thể được sử dụng để thay thế các loại ngũ cốc và đậu trong chế độ ăn giảm cân.',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Cà chua túi 1kg (10 - 12 trái)',
                'price' => '28000',
                'image' => 'ca-chua-tui.jpg',
                'catalog_id' => '1',
                'description' => 'Cà chua được trồng ở Lâm Đồng là loại rau củ rất tốt cho sức khoẻ của người sử dụng, loại rau củ này không những giúp bổ sung chất dinh dưỡng cần thiết cho cơ thể mà chúng có giúp làm đẹp da cho phái nữ. Cà chua có thể ăn sống hoặc chế biến các món ăn cũng rất ngon. Cà chua được xem là một loại thực phẩm thiết yếu bởi chúng rất quen thuộc để tạo ra nhiều món ăn ngon hàng ngày với vị chua ngọt đặc trưng cho gia đình. Đây cũng được xem là một loại củ rất bổ dưỡng và lành mạnh, có tác dụng tăng cường sức đề kháng của cơ thể, ngăn ngừa và điều trị bệnh suy nhược, chống chống nhiễm trùng. Không những thế, cà chua còn chứa hàm lượng vitamin A cao, mang đến nhiều lợi ích cho sức khoẻ. Cà chua còn giúp làm trắng sáng da ở phụ nữ bằng nhiều cách như nước ép cà chua, mặt nạ cà chua,...',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Khoai lang Nhật túi 1kg (4 - 10 củ)',
                'price' => '28000',
                'image' => 'khoai-lang-nhat.jpg',
                'catalog_id' => '1',
                'description' => 'Khoai lang Nhật trồng tại Lâm Đồng là món ăn được rất nhiều người yêu thích, được trồng và có củ quanh năm, ngon nhất là khi được nướng lên trên một bếp than đổ hồng. Loại củ này có vị ngọt ngào như mật, tan tan trên đầu lưỡi. Khoai lang Nhật chứa nhiều vitamin A, B, C và nhiều khoáng chất cần thiết. Khoai lang Nhật là một loại củ có hình dáng thon, dài. Với lớp vỏ bên ngoài màu tím, trong ruột thì vàng, hương vị ngọt dịu nhẹ, bùi nên chiếm được rất nhiều cảm tình của mọi người. Khoai lang mang vị ngọt bùi dễ ăn, lại cực kỳ tốt cho quá trình giảm cân, nhờ đó mà được rất nhiều người ưa chuộng. Trong Đông y củ khoai lang có vị ngọt, tính bình, có công dụng nhuận tràng, bồi bổ cơ thể, tiêu viêm, lợi mật, sáng mắt,.. đặc biệt ăn khoai vào buổi sáng sẽ giúp bạn cung cấp đầy đủ dinh dưỡng cho cơ thể, đặc biệt là chữa được nhiều bệnh nguy hiểm mà bạn không ngờ tới. Lựa chọn và ăn khoai lang đúng cách sẽ không chỉ mang đến món ăn ngon mà còn giúp bạn bảo vệ sức khoẻ gia đình. Khi mua bạn cần lưu ý những điều sau: không chọn mua khoai lang đã mọc mầm, chỉ nên ăn khoai lang vào các bữa phụ, tránh ăn khoai sống vì sẽ dễ bị ợ chua, đầy hơi, chọn những củ khoai còn tươi, cuống khoai đang còn mủ.',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Măng tây bó 200gr',
                'price' => '25000',
                'image' => 'mang-tay.jpg',
                'catalog_id' => '1',
                'description' => 'Măng tây được nuôi trồng tại Lâm Đồng và đóng gói theo những tiêu chuẩn nghiêm ngặt, bảo đảm các tiêu chuẩn xanh - sạch, chất lượng và an toàn với người dùng. Măng giòn, ngọt, hàm lượng dinh dưỡng cao nên thường được chế biên bằng hấp, luộc hoặc nướng để có thể giữ được độ tươi ngon. Măng tây là loại rau củ quý giá có chứa hàm lượng dinh dưỡng cao như: chất xơ, đạm, glucid, các vitamin K, C, A, pyridoxine (B6), riboflavin (B2), acid folic, canxi, sắt, kẽm… mang đến nhiều lợi ích cho sức khỏe và được chế biến thành nhiều món ăn khác nhau. Các dưỡng chất trong măng tây hỗ trợ, bổ sung rất nhiều chất dinh dưỡng như tốt cho tim mạch, hệ tiêu hoá, tăng cường hệ miễn dịch, ngăn ngừa loãng xương,... ngoài ra, măng tây còn giúp giảm cân một cách hiệu quả nữa đó. Măng tây thì bạn có thể chế biến thành nhiều món ăn khác nhau như: măng tây xào thịt bò, măng tây xào nấm, súp cá hồi phô mai măng tây, súp tôm măng tây,...',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Đậu hà lan vỉ 200gr',
                'price' => '20000',
                'image' => 'dau-ha-lan.jpg',
                'catalog_id' => '1',
                'description' => 'Đậu hà lan được trồng tại Lâm Đồng với hương vị thơm ngon, giàu chất xơ, cung cấp các chất dinh dưỡng cần thiết cho cơ thể như kali và folate. Đậu hà lan mang tới hương vị thơm ngon, đặc trưng cho từng món ăn, cả nhà ai cũng thích. Đậu Hà Lan là loại đậu có nguồn gốc từ rất lâu, xuất hiện ở niên đại 4800 - 4400 ở khu vực đồng bằng sông Nile, tới nay có nhiều nghiên cứu cho rằng nó có nguồn gốc từ vùng Cận Động và các khu vực Địa Trung Hải. Ngày nay, đậu Hà Lan có thể được trồng ở nhiều nơi trên thế giới, mang lại năng suất cao và tốc độ sinh trưởng tốt ở những khu vực có khi hậu ẩm, nhiệt độ từ 18-20 độ C. Đậu Hà Lan là một loại đậu màu xanh lục, đôi khi cũng có màu vàng, có tên khoa học là Pisum Sativum. Đậu Hà Lan là loại thân thảo, có thể tự thụ phấn, nó quấn vào những cây khác để leo lên và phát triển. Nhìn chung, đậu Hà Lan là một loại cực kỳ giàu tinh bột, chất xơ, chất đạm và nhiều loại vitamin cùng với nhiều khoáng chất thiết yếu cho con người. Trung bình trong 100g đậu Hà Lan có chứa nhiều chất dinh dưỡng như năng lượng 81Kcal, carbohydrate 14.3g, chất đạm 5.2g, chất bép 0.3g,... cùng các vitamin A, K và C và các khoáng chất thiết yếu khác cho cơ thể.',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Bắp cải tím túi 500gr (1 - 2 bắp)',
                'price' => '20000',
                'image' => 'bap-cai-tim.jpg',
                'catalog_id' => '1',
                'description' => 'Là một loại thực phẩm vô cùng quen thuộc, có màu sắc vô cùng bắt mắt, rất dễ mua và chế biến thành nhiều món ăn đa dạng khác nhau trong bữa cơm hằng ngày.  Bắp cải tím được trồng tại Lâm Đồng, đặc biệt mang đến lợi ích trong việc hỗ trợ phòng chống ung thư, giúp cơ thể khỏe mạnh toàn diện. Mọi người dường như đã quá quen thuộc với những quả bắp cải xanh nhưng ít người biết rằng, bắp cải còn có loại màu tím bắt mắt. Bắp cải tím là một dạng bắp cải (bắp sú) có nhiều lá giống như bắp cải xanh. Đây là một loại rau dinh dưỡng đã trở nên phổ biến do đem lại nhiều lợi ích sức khỏe. Bắp cải tím đậm hay nhạt thường được đo bằng chỉ số pH vì thay đổi màu sắc tùy thuộc vào độ pH của đất giúp nó phát triển. Bắp cải tím có nhiều công dụng tốt cho sức khoẻ như: chất phytochemical, chất dinh dưỡng, chất chống oxy hóa, vitamin và khoáng chất có thể kế đến như là: thiamin, folate, canxi, magiê, mangan, riboflavin, sắt, kali, vitamin A, vitamin E, vitamin C, vitamin K và vitamin B và chất xơ. Ngoài ra, bắp cải tím còn mang lại nhiều lợi ích cho cơ thể như: tăng cường hệ miễn dịch, ngăn ngừa ung thư, giảm cân, chống viêm khớp, điều trị viêm loét dạ dày, giảm nguy cơ loãng xương,...',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Ớt chuông đỏ túi 300gr (2 - 4 trái)',
                'price' => '19500',
                'image' => 'ot-chuong-do.jpg',
                'catalog_id' => '1',
                'description' => 'Ớt chuông đỏ trồng tại Lâm Đồng có kích thước to và có nhiều màu sắc khác nhau như: xanh, vàng, đỏ... Ớt chuông đỏ này không có vị cay gắt như các loại ớt thông thường khác mà có vị giòn nên thích hợp cho các món xào, ăn sống. Loại ớt này còn chứa nhiều khoáng chất và vitamin tốt cho cơ thể. Ớt chuông là giống ớt có quả to, phần thịt dày và giòn xốp. Đặc biệt, ớt chuông là loại rau củ có sự đa dạng về màu sắc (gồm xanh, vàng, cam, đỏ và đen) cũng như hương vị và độ cay nồng khác nhau. Ớt chuông xanh có hương vị hăng khá đặc trưng, trong khi đó ớt màu đỏ và vàng thường có vị ngọt hơn. Ớt chuông đỏ được sử dụng để làm dầu thơm và tương ớt khi bạn muốn giảm bớt vị cay.',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Đậu cove túi 500gr',
                'price' => '18000',
                'image' => 'dau-que.jpg',
                'catalog_id' => '1',
                'description' => 'Đậu cove được sản xuất tại Lâm Đồng và đóng gói theo tiêu chuẩn xanh - sạch, chất lượng và an toàn khi đến tay người dùng. Với vị mát, giòn và ngọt nên đậu cove đã trở thành một trong những món ăn ưa chuộng của bữa cơm Việt. Có thể dùng để luộc, xào cùng các loại thịt hoặc để nấu súp. Đậu que hay còn được gọi là đậu cô ve, là loại thực phẩm quen thuộc trong mỗi bữa ăn của gia đình. Như cải bẹ xanh, cải ngọt, cải thìa và những loại rau khác, đậu que mang lại rất nhiều giá trị dinh dưỡng cần thiết cho cơ thể mà nổi bật nhất là giảm lượng Cholesterol xấu nạp vào cơ thể, bảo vệ sức khỏe tim mạch. Đậu que không những giàu chất xơ mà còn bổ sung nhiều loại vitamin cần thiết cho cơ thể như vitamin K, C, A, B1, B2, B3, B6, E và các khoáng chất như Canxi, Sắt, Magie, Phốt pho, Kali, Natri, Kẽm, Đồng, Mangan. Trước khi sử dụng đậu để chế biến món ăn, cần rửa sạch đậu, loại bỏ hai đầu của đậu cũng như đường chỉ hai bên hông. Ngâm đậu que trong nước muối loãng 10 phút rồi rửa sạch với nước, cuối cùng là cắt nhỏ tùy vào món ăn định chế biến. Đậu que khi xào lên nên cho thêm chút muối để có thể giữ được độ xanh cũng như giòn của đậu, không nên xào lửa quá lớn hoặc quá lâu sẽ khiến đậu bị mềm và bở.',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Củ sắn túi 1kg (3 - 5 củ)',
                'price' => '16500',
                'image' => 'cu-san.jpg',
                'catalog_id' => '1',
                'description' => 'Củ sắn là một loại củ rất quen thuộc với mọi gia đình. Phần thịt của củ sẵn khá ngọt, nhiều nước và rất giòn, chứa nhiều khoáng chất như: sắt, photpho, canxi và các vitamin A, C, B…. Thông thường người ta sẽ dùng củ sắn để ăn sống hoặc chế biến thành nhiều món ăn như: xào, luộc hay nấu canh,.... Củ sắn hay còn gọi là củ đậu, đây là một loại rau củ được trồng rất nhiều khắp thế giới. Củ sắn có kích thước to, tròn và trông khá giống với con quay, thịt chắc và nặng, có lớp vỏ xơ dai màu vàng. Phần thịt của củ sẵn khá ngọt, nhiều nước và rất giòn, chấm với muối tôm và ướp lạnh ngon vô cùng. Thông thường người ta sẽ dùng củ sắn để ăn sống hoặc chế biến thành nhiều món ăn khác nhau như: xào, luộc hay nấu canh,... Củ sắn có vị ngọt nhẹ, thanh mát, có chứa nhiều tinh bột, đường glucose, protein và gần 90% là nước cùng các loại khoáng chất khác như sắt, photpho, canxi và các vitamin A, C, B... Củ sắn chứa rất nhiều chất dinh dưỡng tốt cho kể thể, mang lại lợi ích rất nhiều có thể kể đến như: tốt cho hệ tiêu hoá, bồi bổ sức khoẻ cho tim mạch và tăng cường hệ miễn dịch, hỗ trợ giảm cân và đẹp da,...',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Bắp mỹ túi 2 trái (từ 600g trở lên)',
                'price' => '13500',
                'image' => 'bap-my.jpg',
                'catalog_id' => '1',
                'description' => 'Bắp Mỹ là một loại thực phẩm được trồng rất nhiều ở khắp nơi trên thế giới. Đây là một loại quả vừa ngon, lại có rất nhiều chất khoáng chất và vitamin. Bắp có thể chế biến thành nhiều món ăn ngon như: cơm bắp, chè bắp, sữa bắp,... bất kỳ món gì cũng tạo nên hương vị tuyệt hảo. Tổ chức Dinh dưỡng thế giới đã có công trình nghiên cứu và phân tích các thành phần dinh dưỡng trong bắp Mỹ. Theo đó, trong loại quả này có chứa đa dạng các khoáng chất và vitamin như protein, calo, đồng, sắt, selen, kẽm, niacin, A, E, C, B3, B1, thiamine…Ngoài ra, trong bắp Mỹ còn chứa cellulose, chất xơ rất tốt cho hệ tiêu hóa. Có thể nói đây là một loại ngũ cốc giàu dưỡng chất, hương vị lại thơm ngon, dễ ăn, dễ chế biến, cùng với màu sắc đẹp mang đến sự bắt mắt, hấp dẫn hơn rất nhiều cho món ăn. ',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Cà tím túi 500gr (2 - 3 trái)',
                'price' => '12000',
                'image' => 'ca-tim.jpg',
                'catalog_id' => '1',
                'description' => 'Cà tím được trồng tại Đà Lạt hay còn được gọi là cà dái dê, đây là một loại rau củ chế biến được thành rất nhiều món ăn thơm ngon như: hấp, xào, nướng, ăn sống,... mỗi dạng đều mang lại hương vị rất ngon. Trong cà tím chứa hàm lượng chất xơ vô cùng cao và giàu sắt rất tốt cho cơ thể. Cà tím (hay quả cà tím), có họ hàng với cà chua, khoai tây, cà pháo. Loại củ, quả này sử dụng trong chế biến dưới dạng thức ăn hầm, xào, nướng. Nhờ chứa hàm lượng chất xơ vô cùng cao và giàu sắt, cà tím còn giúp giảm nguy cơ mắc các bệnh ung thư như ung thư ruột kết, trực tràng, tim mạch, chữa chứng hay quên,... Giá trị dinh dưỡng Trong cà tím có chứa các chất dinh dưỡng sau chất xơ, protein, Mangan, Kali, vitamin K, vitamin C. Ngoài ra, quả cũng chứa một lượng nhỏ chất dinh dưỡng khác bao gồm niacin, magiê và đồng.',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Su su túi 500gr (1 - 3 trái)',
                'price' => '10000',
                'image' => 'su-su.jpg',
                'catalog_id' => '1',
                'description' => 'Su su là một loại củ được nhiều chị em nội trợ chọn mua để chế biến thành các món ăn ngon cho gia đình. Quả su su trồng tại Lâm Đồng có tính mát, lành tính, chứa nhiều chất dinh dưỡng có lợi cho sức khỏe như nước, protid, glucid, vitamin C,... Su su có thể chế biến thành nhiều món ăn ngon. Su su (hay còn gọi là su le) là một loại thực phẩm thuộc lớp củ, quả thuộc họ Bầu, bí, cùng với dưa hấu, dưa chuột và bí. Cây su su thân leo có rễ phình thành củ. Lá to, bóng, hình chân vịt, có 5 thuỳ, tua cuốn chia 3-5 nhánh. Hoa nhỏ, đơn tính, cùng gốc, màu trắng vàng. Quả hình quả lê có cạnh lồi dọc và sần sùi, to bằng nắm tay, chứa một hạt lớn hình cầu. Quả su su có tính mát, lành tính, chứa nhiều chất dinh dưỡng có lợi cho sức khỏe như nước, protid, glucid, vitamin C. Trong quả và hạt su su giàu axit amino như axit aspartic axit glutamic, alanine, arginine, cysteine, phenylalanine, glycine, histidine, isoleucine, leucine, methionine (chỉ có ở quả), proline, serine, tyrosine, threonine và valine.',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Củ dền túi 500g (2 - 5 củ)',
                'price' => '11000',
                'image' => 'cu-den.jpg',
                'catalog_id' => '1',
                'description' => 'Củ dền trồng tại Lâm Đồng là một loại củ thường được các chị em nội trợ chọn vào menu hàng tuần. Bên trong loại rau củ này và cả lá của nó có chứa nhiều vitamin và khoáng chất giúp cải thiện sức khoẻ cho cơ thể. Củ dền có thể dùng chế biến thành các món ăn như canh hay có thể dùng để làm nước ép cũn... Củ dền hay còn gọi là củ dền đỏ, là một loại củ quen thuộc trong món ăn của nhiều gia đình. Củ dền có lớp vỏ bên ngoài xù xì, bên trong có màu đỏ thẫm hoặc tím than, lớp thịt cứng giòn. Đây là loại rau củ chứa nhiều vitamin (A, B2, C,...) cùng với hàm lượng chất xơ, chất sắt cao và các khoáng chất có lợi. Vì thế, củ dền có rất nhiều công dụng đối với sức khỏe con người khi chế biến thành nhiều món ăn như điều hòa huyết áp, cải thiện đường tiêu hóa, hỗ trợ thải độc,...',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Khổ qua gói 500gr (3-5 trái)',
                'price' => '13500',
                'image' => 'kho-qua.jpg',
                'catalog_id' => '1',
                'description' => 'Hay còn gọi là mướp đắng, là món ăn cực quen thuộc trong thực đơn hàng tuần của các bà nội trợ. Trong khổ qua chứa rất nhiều vitamin và khoáng chất tốt cho cơ thể, giúp nâng cao chức năng miễn dịch, thanh nhiệt giải độc. Khổ qua có thể chế biến thành canh hoặc các món xào đều rất ngon. Khổ qua còn được gọi là mướp đắng, là loại cây ăn quả có vị đắng, tính hàn, được sử dụng như một loại rau củ dùng trong chế biến món ăn. Khổ qua có nhiều công dụng tuyệt vời như thanh nhiệt, giải độc, giải sốt, giải cảm, tăng cường sức đề kháng. Mặc dù có vị đắng khó ăn nhưng khổ qua vẫn được nhiều người ưa chuộng trong việc chế biến món ăn hằng ngày. Mặc dù khổ qua là loại quả tốt cho sức khỏe, nhưng ăn nhiều khổ qua sẽ gây ra các triệu chứng như giảm huyết áp, đau đầu, chóng mặt, đầy hơi,...  Vì thế, những bệnh nhân mắc bệnh gan, huyết áp thấp, hệ tiêu hóa kém nên cân nhắc khi sử dụng. Đặc biệt, đối với phụ nữ mang thai, khổ qua được coi là tác nhân gây kích thích tử cung và sinh non. Ngoài ra, phụ nữ cho con bú cũng không nên dùng vì trong khổ qua có một số thành phần không tốt có thể bị truyền qua sữa mẹ.',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Mướp hương túi 500gr (2 - 4 trái)',
                'price' => '10000',
                'image' => 'muop-huong.jpg',
                'catalog_id' => '1',
                'description' => 'Là loại rau củ được nhiều chị em nội trợ chọn mua để chế biến thành các món ăn ngon cho gia đình. Mướp hương cũng chứa nhiều nước, Protid, Lipid, Glucid, Canxi, Photpho, Sắt, B1, B6, B2, C rất tốt cho cơ thể. Mướp có thể chế biến thành các món xào, món canh, hấp đều rất ngon. Mướp hương hay có tên gọi khác là: mướp gối, cây mướp, mướp ta,... đây là một loại rau củ quá đỗi quen thuộc với các bà nội trợ. Mướp hương sau khi chín thường sẽ có màu xanh đậm hoặc xanh nhạt, có chiều dài khoảng 25 - 30cm, vỏ thô ráp. Mướp hương có mùi thơm ngát đặc trưng khi còn tươi cũng như khi đã chế biến thành nhiều món ăn khác nhau. Khi chế biến thì mướp hương có độ mềm, thơm ngon. Mướp hương chứa nhiều nước, Protid, Lipid, Glucid, Canxi, Photpho, Sắt, B1, B6, B2, C…có tác dụng chống viêm, chống nếp nhăn và hỗ trợ điều trị các chứng ho, đau họng, đau răng, đau lưng, đau bụng kinh hoặc viêm bàng quang. Cách chọn mua mướp hương cũng rất đơn giản, để mua được mướp hương tươi ngon, bạn nên chọn mua mướp vào đúng thời vụ. Chọn những quả mướp cầm nặng tay, cuống còn tươi và trên vỏ không có vết nám đen. Ngoài ra, bạn chỉ nên chọn mua mướp hương ở những cửa hàng thực phẩm, hệ thống siêu thị lớn, uy tín, để đảm bảo sản phẩm có nguồn gốc rõ ràng và an toàn cho sức khỏe.',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Bông cải xanh túi 300gr (1 bông)',
                'price' => '15000',
                'image' => 'bong-cai-xanh.jpg',
                'catalog_id' => '1',
                'description' => 'Bông cải xanh là một loại rau xanh quen thuộc và được rất nhiều người ưa chuộng. Bông cải xanh được trồng tại Lâm Đồng không chỉ thơm ngon, dễ ăn mà còn mang lại rất nhiều lợi ích cho sức khoẻ. Bạn có thể tham khảo các món như bông cải xanh hấp, bông cải xanh xào hải sải, súp bông cải xanh,... Lợi ích dinh dưỡng: Bên cạnh những tác dụng giảm viêm và chống oxy hóa, một số hợp chất trong bông cải xanh có thể giúp giảm tổn thương mãn tính của một số mô trong cơ thể. Ngoài giàu dưỡng chất và vitamin, bông cải xanh hay còn được gọi là súp lơ, là loại rau xanh được nghiên cứu cho thấy tác dụng giảm nguy cơ ung thư ở một số cơ quan như ung thư vú, tuyến tiền liệt, dạ dày, thận, bàng quang.',
                'created' => '2022-04-25',
                'expiry' => '2022-04-25'
            ],
            [
                'name' => 'Táo Ninh Thuận túi 1kg (25 - 30 trái)',
                'price' => '37000',
                'image' => 'tao-ninh-thuan-tui.jpg',
                'catalog_id' => '2',
                'description' => 'Táo Ninh Thuận có hình dáng khá tròn, nhỏ, giòn và có vị ngọt thanh. Táo chỉ cần rửa sạch, chấm với muối ớt hoặc muối tôm ăn bắt vị vô cùng. Bên cạnh đó táo Ninh Thuận còn rất nhiều lợi ích cho sức khỏe như đẹp da, tốt cho trí não, hệ tiêu hóa và hệ miễn dịch nên rất được ưa chuộng. Táo Ninh Thuận hay còn được gọi là táo gió, chúng được trồng rất nhiều ở vùng đất đầy nắng và gió Phan Rang - Ninh Thuận. Loại táo này có đặc điểm khá tròn, nhỏ, giòn và có vị ngọt thanh, tạo cảm giác hứng thú khi sử dụng. Bạn sẽ dễ dàng cảm nhận được vị giòn ngọt khi cắn vào loại trái cây này, tạo cho bạn một cảm giác sảng khoái. Ngoài ra, với màu xanh bóng loáng từ phần da, sẽ tạo cho bạn một cảm giác phấn khởi hơn khi cắn vào. Công dụng của Táo Ninh Thuận với sức khoẻ: Chứa chất chống oxy hóa giúp đẹp da, đẹp dáng. Chứa nhiều khoáng chất thiết yếu tốt cho trí não và hệ miễn dịch. Bổ sung máu cho cơ thể, ngăn ngừa tình trạng thiếu máu. Giàu chất xơ có lợi cho hệ tiêu hóa Giàu vitamin, cứ 100g táo ta sẽ có khoảng 400 - 600 vitamin C, cao hơn 7 đến 10 lần lượng vitamin C có trong quả cam, quýt. Ít chất béo hỗ trợ giảm cân hiệu quả',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Táo Envy Mỹ hộp 1 trái (250g - 300g)',
                'price' => '80000',
                'image' => 'tao-envy-my-hop.jpg',
                'catalog_id' => '2',
                'description' => 'Là giống táo được lai tạo từ giống táo Braeburn và táo Royal Gala, quả có vỏ màu đỏ thẫm tựa rượu vang, thịt táo có độ giòn cứng, có xuất xứ từ New Zealand, Mỹ. Táo Envy nhập khẩu New Zealand, Mỹ hộp 1kg cung cấp chất xơ và khoảng 14% vitamin C có lợi cho sức khỏe. Nếu là một người đam mê thưởng thức các loại trái cây, thì bạn không thể bỏ qua những loại trái cây nhập khẩu cao cấp như táo Rockit, táo Gala,... đặc biệt là táo Envy có xuất xứ từ New Zealand. Đây là giống táo được lai tạo từ giống táo Braeburn và táo Royal Gala, quả có vỏ màu đỏ thẫm tựa rượu vang, thịt táo có độ giòn cứng, không bị bột, lợn cợn trong miệng và hương vị mãnh liệt. khi thưởng thức Đặc biệt, một ưu điểm hiếm có của loại táo này là có thể giữ được độ trắng tinh khiết lên đến 10 giờ khi để ngoài không khí mà không bị thâm đen do quá trình oxi hóa thường thấy ở một số loại táo khác. GIÁ TRỊ DINH DƯỠNG CỦA TÁO ENVY: Trong một quả táo Envy có ít hơn 100 calories, 17% các giá trị chất xơ và khoảng 14% vitamin C có lợi cho sức khỏe. Thay cho các món tinh bột vừa đảm bảo đủ no, chống đói, chống thèm ăn mà vẫn vẫn cung cấp đủ năng lượng và chất dinh dưỡng. Chứa một lượng nhỏ quercetin, boron và Vitamin B. Chứa nhiều chất xơ, kích thích hoạt động tiêu hóa, cân bằng hấp thu dinh dưỡng. Hàm lượng phytonutrient dồi dào gồm kaempferol và quercetin giúp làm chậm sự phát triển của tế bào có hại, từ đó ngăn ngừa cơ thể mắc những căn bệnh ung thư phổ biến. Táo Envy là giống táo chứa hàm lượng dinh dưỡng cao, vì thế bạn nên thưởng thức cả phần vỏ và phần thịt. Táo sau khi mua về nên rửa sạch phần lớp vỏ bên ngoài bằng nước muối hoặc nước rửa rau củ quả đa năng để đảm bảo phần vỏ đã được làm sạch các dư lượng chất bảo quản,...',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Táo xanh Mỹ hộp 1kg (5-7 trái)',
                'price' => '105000',
                'image' => 'tao-xanh-my-hop.jpg',
                'catalog_id' => '2',
                'description' => 'Là một trong những loại trái cây nhập khẩu được nhiều người ưa chuộng bởi vị chua đậm khác biệt với các giống táo nhập khẩu khác. Táo xanh Mỹ có nguồn gốc rõ ràng, giá trị dinh dưỡng cao như giảm lượng cholesterol xấu, chống lại các bệnh ung thư gan, ruột kết và ung thư vú. Táo xanh Mỹ là giống táo được phát hiện ở Úc và du nhập vào Mỹ vào năm 1860. Đây là một trong những loại trái cây nhập khẩu được nhiều người ưa chuộng bởi vị chua đậm khác biệt với các giống táo nhập khẩu khác. Táo có quả có kích thước không quá to, vỏ ngoài có màu xanh nhạt, láng mịn, hơi dai. Thịt táo bên trong có độ giòn, vị chua, nhiều nước. GIÁ TRỊ DINH DƯỠNG CỦA TÁO XANH: Trung bình mỗi quả táo xanh có chứa 4g chất xơ ở dạng Pectin, có tác dụng giảm lượng cholesterol xấu, tạo cảm giác no lâu mà không bị tiêu thụ nhiều calo. Trong vỏ táo có chứa Axit Ursolic làm giảm nguy cơ béo phì, Axit Ursolic thúc đẩy cơ thể đốt cháy calo, tăng việc hình thành cơ và giảm chất béo lâu năm trong cơ thể. Táo xanh là loại trái cây có chứa nguồn vitamin C dồi dào có trong phần vỏ táo có tác dụng tăng cường hệ thống miễn dịch. Đặc biệt, táo xanh có chứa chất chống oxy hoá và chất Triterpenoids có khả năng chống lại các bệnh ung thư gan, ruột kết và ung thư vú. BẢO QUẢN TÁO XANH ĐÚNG CÁCH: Táo xanh được bảo quản tủ lạnh ở nhiệt độ từ 4 đến 8 độ C sẽ giữ được độ tươi, độ giòn trong vòng 1-4 tuần. Sau thời gian này, táo xanh sẽ ngọt hơn, độ PSI thấp hơn sẽ làm táo xốp hơn. Cần tránh để táo với các thực phẩm có mùi khác như hành, tỏi, táo sẽ dễ nhiễm mùi. MÓN NGON VỚI TÁO XANH: Với vẻ ngoài bắt mắt, táo xanh không chỉ được dùng để lảm quả biếu tặng hoặc sử dụng trực tiếp mà chính bởi độ chua vốn có mà chúng còn được dùng trong việc thay thế các bữa ăn chính với các món như salad trái cây,... Ngoài ra, táo còn dùng để ép lấy nước hoặc chế biến thành các món snack táo giòn thơm, thích hợp với những người ăn kiêng vì lượng đường ít. ',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Bưởi da xanh trái từ 1.7kg trở lên',
                'price' => '68000',
                'image' => 'buoi-da-xanh-trai.jpg',
                'catalog_id' => '2',
                'description' => 'Bưởi da xanh là một trong những trái cây đặc sản nổi tiếng của Việt Nam. Loại bưởi da xanh này không chỉ ngon, ngọt mà còn mang lại cho con người nhiều công dụng tốt cho sức khoẻ như cung cấp nguồn vitamin dồi dào. Bưởi da xanh thích hợp cho những ngày nắng nóng với nhiều cách chế biến. Ưu điểm khi mua bưởi da xanh: Bưởi da xanh là loại trái cây được trồng phổ biến nhất ở tỉnh Bến Tre. Đúng với tên gọi của loại bưởi này, bưởi có hình cầu, vỏ màu xanh khi chín thì mới chuyển sang xanh hơi vàng một chút. Bưởi da xanh này là múi có màu hồng đỏ rất bắt mắt mang vị ngọt dịu, không chua và những tép bưởi rất dễ tróc vỏ, chính vì điều này làm cho loại bưởi này rất được nhiều người yêu thích. Bưởi da xanh được đảm bảo nguồn gốc xuất xứ rõ ràng, an tâm cho khách hàng chọn lựa. Khối lượng một trái từ 1,7kg trở lên. Đặt giao hàng nhanh. Bưởi da xanh trái từ 1.7kg trở lên 0. Giá trị dinh dưỡng của bưởi da xanh. Bưởi da xanh có nhiều chất xơ, chứa nhiều vitamin C cùng những vitamin và khoáng chất khác tốt cho cơ thể. Trong 100g bưởi năm roi có khoảng 38 kcal. Tác dụng của bưởi da xanh đối với sức khỏe. Với lượng vitamin C dồi dào, bưởi da xanh giúp tăng cường sức đề kháng của cơ thể. Trong bưởi còn có chất chống oxy hóa, bảo vệ cơ thể tốt trong những bệnh về xương khớp,...Ngoài ra, bưởi da xanh còn có nhiều công dụng như giúp thông mũi, miệng, sảng khoái, giúp long đờm, giữ ấm bụng, giảm lượng cholesterol, phòng chống ung thư, dưỡng tóc, trị gàu và trị rụng tóc, hói đầu,...,',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Bưởi năm roi trái từ 900g trở lên',
                'price' => '37000',
                'image' => 'buoi-nam-roi-trai.jpg',
                'catalog_id' => '2',                
                'description' => 'Bưởi 5 roi là một trong những trái cây đặc sản nổi tiếng của Việt Nam. Bưởi 5 roi không chỉ ngon, ngọt mà còn mang lại cho con người nhiều công dụng tốt cho sức khoẻ như cung cấp nguồn vitamin dồi dào. Bưởi tại Bách hoá XANH thích hợp cho những ngày nắng nóng với nhiều cách chế biến. Ưu điểm khi mua bưởi năm roi: Bưởi năm roi khoác lên mình vỏ ngoài hình trái lê có màu xanh ngả vàng khi chín rất đẹp mắt, đây là giống trái cây nổi tiếng được trồng nhiều ở một số tỉnh miền Tây Nam Bộ. Khi tách ra, bên trong múi có màu vàng khá bắt mắt, mang vị ngọt thanh và hơi chua nhẹ, một đặc điểm khác của loại bưởi này là tép tróc khỏi vách múi và bó chặt vào nhau. Giống bưởi Năm Roi thường không có hạt hoặc rất ít, đây chính là điểm đặc biệt khiến bưởi Năm Roi này là giống bưởi quý hiếm hơn so với các loại khác. Bưởi năm roi được đảm bảo nguồn gốc xuất xứ rõ ràng, an tâm cho khách hàng chọn lựa. Khối lượng một trái từ 900g trở lên. Đặt giao hàng nhanh. Bưởi năm roi trái từ 900g trở lên 0. Giá trị dinh dưỡng của bưởi năm roi. Bưởi năm roi có nhiều chất xơ, chứa nhiều vitamin C cùng những vitamin và khoáng chất khác tốt cho cơ thể. Trong 100g bưởi năm roi có khoảng 38 kcal. Tác dụng của bưởi năm roi đối với sức khỏe. Với lượng vitamin C dồi dào, bưởi năm roi giúp tăng cường sức đề kháng của cơ thể. Trong bưởi còn có chất chống oxy hóa, bảo vệ cơ thể tốt trong những bệnh về xương khớp,...Ngoài ra, bưởi năm roi còn có nhiều công dụng như giúp thông mũi, miệng, sảng khoái, giúp long đờm, giữ ấm bụng, giảm lượng cholesterol, phòng chống ung thư, dưỡng tóc, trị gàu và trị rụng tóc, hói đầu,...',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Cam sành túi 1kg (3 - 4 trái)',
                'price' => '35000',
                'image' => 'cam-sanh-tui.jpg',
                'catalog_id' => '2',
                'description' => 'Cam sành là loại trái cây được nhiều người yêu thích. Cam sành trái to, cầm chắc tay, khi ăn sẽ cảm nhận được vị chua chua ngọt ngọt, giàu vitamin C tốt cho cơ thể. Cam sành có lớp vỏ dày, sần sùi giống như bề mặt mảnh sành và màu lục nhạt. Múi thịt có màu cam vị ngọt và thơm. Ưu điểm khi mua cam sành: Cam sành to quả, chắc, cầm nặng tay, có màu xanh bóng, có vị ngọt thanh, thơm. Cam sành tươi, không bị dập, bị thối. Cam sành là trái cây nội, có nguồn gốc xuất xứ rõ ràng, 1 kg cam sành có từ 3 đến 4 trái. Đặt giao hàng nhanh. Cam sành túi 1kg (3 - 4 trái) 0. Giá trị dinh dưỡng của cam sành. Cam sành là trái cây chứa nhiều chất dinh dưỡng như vitamin C, các vitamin chống oxy hóa, các khoáng chất như canxi, natri, phốt pho,...lượng chất xơ cao, tốt cho sức khỏe. Trong 100g cam sành có khoảng 47 kcal. Tác dụng của cam sành đối với sức khỏe. Cam có tác dụng tốt cho cơ thể do chứa nhiều thành phần như vitamin, các chất dinh dưỡng và khoáng chất. Giúp hệ tiêu hóa hoạt động hiệu quả hơn, tránh cảm cúm, tăng cường thị lực, giúp ngủ ngon,... Ngoài ra, cam còn có nhiều công dụng làm đẹp thần kì được rất nhiều chị em phụ nữ áp dụng.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Cam vàng Ai Cập hộp 1kg (3-5 trái)',
                'price' => '60000',
                'image' => 'cam-vang-ai-cap-hop.jpg',
                'catalog_id' => '2',
                'description' => 'Cam nhập khẩu 100% từ Ai Cập (giấy chứng nhận nguồn gốc xuất xứ). Đạt tiêu chuẩn xuất khẩu toàn cầu. Bảo quản trái cây tươi ngon đến tận tay khách hàng. Cam vàng có trái to tròn, màu vàng tươi, mùi thơm thanh mát. Múi cam to, tép mọng nước, vị chua dịu, thích hợp để vắt nước. Ưu điểm khi mua cam vàng: Cam vàng to quả, chắc, cầm nặng tay, trái tròn căng bóng, mọng nước và cực kỳ thơm ngon. Cam sành tươi, không bị dập, bị thối. Là loại trái cây nhập khẩu từ Ai Cập an toàn vệ sinh. Cam sành là trái cây nội, có nguồn gốc xuất xứ rõ ràng, 1 kg cam sành có từ 3 đến 5 trái. Đặt giao hàng nhanh. Cam vàng Ai Cập hộp 1kg (3-5 trái) 0. Giá trị dinh dưỡng của cam vàng. Cam vàng là trái cây chứa nhiều chất dinh dưỡng như vitamin C, các vitamin chống oxy hóa, các khoáng chất như canxi, natri, phốt pho,...lượng chất xơ cao, tốt cho sức khỏe. Trong 100g cam vàng có khoảng 47 kcal. Cam vàng Ai Cập hộp 1kg (3-5 trái) 1. Tác dụng của cam vàng đối với sức khỏe. Cam có tác dụng tốt cho cơ thể do chứa nhiều thành phần như vitamin, các chất dinh dưỡng và khoáng chất. Giúp hệ tiêu hóa hoạt động hiệu quả hơn, tránh cảm cúm, tăng cường thị lực, giúp ngủ ngon,... Ngoài ra, cam còn có nhiều công dụng làm đẹp thần kì được rất nhiều chị em phụ nữ áp dụng. Các món ăn ngon từ cam vàng. Cam là một trong những nguyên liệu tạo nên những món ăn ngon hấp dẫn như mứt cam, rau câu cam, salad cam,...Cam vàng Ai Cập hộp 1kg (3-5 trái) 2. Các thức uống dinh dưỡng từ cam vàng. Cam vàng ngoài ăn trực tiếp có thể làm nước ép cam vô cùng thơm ngon, giải khát và cung cấp dinh dưỡng cho người đau.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Lê Nam Phi nhập khẩu túi 1kg (3 - 4 trái)',
                'price' => '75000',
                'image' => 'le-nam-phi-nhap-khau.jpg',
                'catalog_id' => '2',                
                'description' => 'Lê nhập khẩu 100% từ Nam Phi (giấy chứng nhận nguồn gốc xuất xứ). Đạt tiêu chuẩn xuất khẩu toàn cầu. Bảo quản tươi ngon đến tận tay khách hàng. Quả hình chuông, tròn và thon đều. Vỏ màu xanh xen lẫn vàng và đỏ rực rỡ. Trái chín: chắc thịt, mọng nước, ngọt dịu, thơm mát. Lê Nam Phi giòn, ngọt, mọng nước, là loại trái cây nhập khẩu rất được yêu thích, lê Nam Phi bổ sung nhiều chất xơ, vitamin và khoáng chất cho cơ thể khoẻ và da đẹp, dáng chuẩn hơn. Xem thêm: Chứng nhận nhập khẩu của lê Nam Phi. Lê Nam Phi nhập khẩu túi 1kg (3 - 4 trái) 0. Giá trị dinh dưỡng trong 100g lê Nam Phi: 63 calories, 13mg, 18% chất xơ, 4mg vitamin C, 13mg canxi. Ngoài ra lê Nam Phi còn rất dồi dào vitamin A, C và nhóm B, chứa ít chất béo, năng lượng và giàu protein. Trong lê còn có nhiều khoáng chất thiết yếu như canxi, phốt pho, kali, sắt... CÔNG DỤNG CỦA QUẢ LÊ: Giảm nguy cơ mắc các bệnh tim mạch, tăng cường hệ miễn dịch cho cơ thể khỏe mạnh. Chứa nhiều chất xơ tốt cho hệ tiêu hóa, đồng thời giúp làm giảm các bệnh về đường ruột. Dồi dào khoáng chất và chất chống oxy hóa, giúp ngăn ngừa bệnh ung thư. Loại trái cây này còn tốt cho hệ xương và da',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Bơ túi 700g - 800g (2 trái)',
                'price' => '33000',
                'image' => 'bo-tui-700g-800g-2-trai.jpg',
                'catalog_id' => '2',                
                'description' => 'Bơ là loại trái cây chứa nhiều thành phần dinh dưỡng tốt cho cơ thể bao gồm vitamin, khoáng chất và chất chống oxy hóa. Bơ sáp có phần cơm dày, dẻo thơm hấp dẫn phù hợp chế biến rất nhiều món ăn, thức uống thơm ngon, bên cạnh đó còn mang lại hiệu quả làm đẹp rất tốt. Ưu điểm khi mua bơ: Bơ sáp được đảm bảo tươi, ngon, cơm dày, dẻo vô cùng hấp dẫn. Bơ giao đến cho khách hàng nguyên trái, không bị dập, hư. Bơ là loại trái cây nội địa, được đảm bảo về nguồn gốc xuất xứ, cân đủ khối lượng và số lượng cho khách hàng. Đặt hàng đảm bảo giao hàng nhanh, đúng giờ. Bơ túi 700g - 800g (2 trái) 0. Giá trị dinh dưỡng của bơ: Bơ là loại trái cây bổ dưỡng, rất dễ tiêu hóa, trái của nó có hình tròn hoặc dài, khi trái chín vỏ có màu xanh hoặc màu tím. Trong quả bơ có rất nhiều thành phần dinh dưỡng tốt cho cơ thể, chứa một lượng dưỡng chất thiết yếu đáng kinh ngạc, bao gồm vitamin, khoáng chất và chất chống oxy hóa. Trong 100g bơ sáp có khoảng 160 calo. Tác dụng của bơ đối với sức khỏe. Là loại trái cây chứa nhiều chất dinh dưỡng, bơ cũng có nhiều tác dụng đối với sức khỏe như tăng cường sức khỏe và tâm trạng, tốt cho mắt, cung cấp chất xơ tốt cho hệ tiêu hóa, giảm lượng cholesterol trong máu,...Bơ túi 700g - 800g (2 trái) 1. Các món ăn ngon từ bơ. Làm món ăn dặm cho bé. Đổi vị bữa sáng với bánh mì nướng sốt bơ và sa tế tôm. Đầy đủ dưỡng chất với salad bơ cá hồi. Các thức uống dinh dưỡng từ bơ. Những thức uống từ bơ mà bạn có thể dễ dàng chế biến như sinh tố bơ, kem bơ, trà sữa bơ,...rất hấp dẫn. Cách bảo quản bơ tươi ngon: Để bảo quản bơ được tươi ngon, chất lượng như bơ chín tự nhiên, bạn có thể quét một lớp chanh lên trên bề mặt, đóng túi zip hoặc chân không và cho vào ngăn đông của tủ lạnh. Làm như vậy sẽ giúp giữ được hương vị thơm ngon, béo của bơ.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Dưa lưới tròn ruột cam trái từ 1.3kg trở lên',
                'price' => '69000',
                'image' => 'dua-luoi-tron.jpg',
                'catalog_id' => '2',                
                'description' => 'Là loại trái cây được rất nhiều người ưa thích vì màu sắc đẹp mắt và vị ngon ngọt, mang giá trị dinh dưỡng cao và nhiều công dụng tuyệt vời cho sức khỏe như ngừa ung thư, bổ mắt, chống viêm khớp và làm đẹp da… Dưa lưới tại Bách hoá XANH với vị ngọt vừa phải, giúp người dùng giải khát trong ngày hè. Dưa lưới tròn ruột cam là một trong những giống dưa lưới được nhiều người ưa chuộng. Đặc điểm của giống dưa này là quả có dáng tròn, vỏ dày có hình gân lưới bên ngoài. Bên trong có phần thịt và hạt dưa màu đỏ cam, giòn ngọt, thanh mát. Đây là loại trái cây được yêu thích bởi màu sắc đẹp mắt và vị ngon ngọt. Ngoài ra, dưa lưới có giá trị dinh dưỡng cao và nhiều công dụng tuyệt vời cho sức khỏe như ngừa ung thư, bổ mắt, chống viêm khớp và làm đẹp da...Xem thêm: Bí quyết chọn mua dưa lưới. CÔNG DỤNG CỦA DƯA LƯỚI: Chống oxy hóa ngừa ung thư và lão hóa. Giàu folate và vitamin nhóm B, rất cần thiết cho sự phát triển của thai nhi và ngừa bệnh thiếu máu, giảm nguy cơ bệnh tật cho não, dị tật thần kinh bẩm sinh và chậm phát triển ở trẻ em. Giàu nước và chất xơ, giúp ngăn ngừa táo bón, thúc đẩy và duy trì hệ tiêu hóa khỏe mạnh. Ngăn ngừa sự oxy hóa các khớp xương, giảm viêm nhờ chất phytochemical có trong dưa. Giúp cơ thể giải độc, điều tiết tốt hơn, ngoài ra còn có tác dụng bảo vệ da khỏi tia UV.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Bơ 034 túi 900g (2 - 3 trái)',
                'price' => '43000',
                'image' => 'bo-034-tui-900g.jpg',
                'catalog_id' => '2',
                'description' => 'Bơ 034 là một trong những loại trái cây thuộc hàng ngon và chất lượng cao nhất. Bơ sáp 034 cho quả to dài từ 20 đến 38cm, hạt nhỏ, thịt quả chắc có màu đẹp mắt, chứa nhiều dưỡng chất tốt cho sức khỏe. Ngoài ăn trực tiếp bơ cũng có thể dùng làm nguyên liệu chế biến ra nhiều món ăn ngon hấp dẫn. Ưu điểm khi mua bơ 034 tại Bách hoá XANH. Bơ sáp 034 được đảm bảo tươi, ngon, cơm dày, dẻo vô cùng hấp dẫn. Bơ giao đến cho khách hàng nguyên trái, không bị dập, hư. Bơ 034 là loại trái cây nội địa, được đảm bảo về nguồn gốc xuất xứ, cân đủ khối lượng và số lượng cho khách hàng. Đặt hàng đảm bảo giao hàng nhanh, đúng giờ. Bơ 034 túi 900g (2 - 3 trái) 0. Giá trị dinh dưỡng của bơ 034: Bơ 034 ngon, dẻo, bùi vô cùng, lại còn chứa nhiều chất dinh dưỡng như vitamin C, vitamin E, vitamin K, vitamin B6,... cùng các dưỡng chất khác như chất xơ, khoáng chất kali, omega 3,...Trong 100g bơ 034 có lượng calo khoảng 160kcal. Tác dụng của bơ 034 đối với sức khỏe: Là loại trái cây chứa nhiều chất dinh dưỡng, bơ 034 cũng có nhiều tác dụng đối với sức khỏe như tăng cường sức khỏe và tâm trạng, tốt cho mắt, cung cấp chất xơ tốt cho hệ tiêu hóa, giảm lượng cholesterol trong máu,... Các món ăn ngon từ bơ 034: Làm món ăn dặm với bơ cho bé. Đổi vị bữa sáng với bánh mì nướng sốt bơ và sa tế tôm. Đầy đủ dưỡng chất với salad bơ cá hồi. Salad bơ thơm ngon, thích hợp cho người giảm cân. Các thức uống dinh dưỡng từ bơ 034. Những thức uống từ bơ mà bạn có thể dễ dàng chế biến như sinh tố bơ, kem bơ, trà sữa bơ,...rất hấp dẫn. Bơ 034 túi 900g (2 - 3 trái) 1. Cách bảo quản bơ 034 tươi ngon. Để bảo quản bơ 034 được tươi ngon, chất lượng như bơ chín tự nhiên, bạn có thể quét một lớp chanh lên trên bề mặt, đóng túi zip hoặc chân không và cho vào ngăn đông của tủ lạnh. Làm như vậy sẽ giúp giữ được hương vị thơm ngon, béo của bơ.Lưu ý: Sản phẩm nhận được có thể khác với hình ảnh về màu sắc và số lượng nhưng vẫn đảm bảo về mặt khối lượng và chất lượng.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Sầu riêng trái 2.2kg - 2.5kg',
                'price' => '174000',
                'image' => 'sau-rieng-trai.jpg',
                'catalog_id' => '2',
                'description' => 'Sầu riêng là loại trái cây có mùi thơm nức mũi, kích thích khứu giác. Sầu riêng có vỏ mỏng, hạt lép, cơm vàng... Sầu riêng tại Bách hóa XANH là sầu riêng loại 1 có từ 4 đến 5 múi trên một trái. Ngoài ra, sầu riêng còn chứa hàm lượng vitamin, khoáng chất tốt cho cơ thể. Ưu điểm khi mua sầu riêng: Sầu riêng đảm bảo tươi ngon, thơm, chất lượng đặc biệt. Sầu riêng được lựa chọn kỹ càng trước khi đến tay khách hàng, là sầu riêng loại 1 - tiêu chuẩn Xuất khẩu, có từ 4 đến 5 múi trong một trái, giúp bạn tận hưởng trọn vẹn hương vị sầu riêng. Sầu riêng tại đây vỏ mỏng, cơm dày, hạt lép cùng màu cơm vàng óng cực kỳ bắt mắt. và không bị dập khi giao đến khách hàng. Sầu riêng được đảm bảo nguồn gốc xuất xứ rõ ràng, an tâm cho người dùng lựa chọn. Khối lượng một trái sầu riêng dao động khoảng 2.2kg đến 2.5kg. Sầu riêng trái 2.2kg - 2.5kg 0. Giá trị dinh dưỡng của sầu riêng. Sầu riêng là loại trái cây được nhiều người yêu thích bởi mùi thơm đặc trưng, thơm nức mũi. Sầu riêng còn là loại trái cây thơm ngon bổ dưỡng, chứa nhiều dưỡng chất như vitamin C, vitamin B, khoáng chất, chất xơ và nhiều dưỡng chất khác. Nhiều người thắc mắc ăn sầu riêng có béo không? Thì trong 100gr sầu riêng có lượng calo khoảng 135 - 180 calo. Tùy vào khối lượng ăn nhiều hay ít của mỗi người mà nó có béo không. Sầu riêng trái 2.2kg - 2.5kg 1. Tác dụng của sầu riêng đối với sức khoẻ. Không chỉ là loại trái cây thơm ngon, sầu riêng có nhiều công dụng đối với sức khỏe sẽ khiến bạn bất ngờ đấy, như hỗ trợ hệ tiêu hóa, chống lão hóa, điều trị chứng mất ngủ, cải thiện xương khớp,...Cách chọn sầu riêng ngon. Để chọn quả sầu riêng ngon nhất, bạn nên quan sát những đặc điểm sau. Lựa trái sầu riêng tròn, đều, có nhiều múi. Gai sầu riêng nở to, cứng và đều. Gõ nhẹ sẽ nghe tiếng bồm bộp phát ra. Chọn những quả có hương thơm thật nồng....Cách ăn sầu riêng đơn giản: Sầu riêng có lớp vỏ nhiều gai, cứng khiến nhiều người cảm thấy khó khăn khi ăn nó. Cách ăn sầu riêng đơn giản mà bạn có thể tham khảo đó là sử dụng trực tiếp. Bạn chỉ cần tách vỏ sầu riêng ra, thưởng thức trực tiếp những múi sầu riêng ngon, phần sầu riêng còn dư cho vào hộp nhựa hay túi nilon hút chân không rồi đặt vào ngăn mát tủ lạnh để bảo quản. Khi ăn bạn chỉ cần lấy ra và thưởng thức, hương vị vẫn thơm ngon, hấp dẫn và mát lạnh. Sầu riêng trái 2.2kg - 2.5kg 2. Mẹo bảo quản sầu riêng tươi ngon. Sầu riêng cũng cần được bảo quản đúng cách để giữ lại hương vị thơm ngon, chất lượng nhất. Bảo quản sầu riêng chín trong tủ lạnh là cách bảo quản đơn giản và hiệu quả. Bạn có thể sử dụng màng bọc thực phẩm để bọc từng múi sầu riêng lại cẩn thận. Sau đó bạn cho chúng vào hộp đựng (bằng nhựa hay thủy tinh đều được). Những món ăn ngon với sầu riêng. Sầu riêng ngoài thưởng thức trực tiếp để cảm nhận được sự thơm ngậy, béo ngon của sầu riêng, bạn cũng có thể chế biến nhiều món ngon từ sầu riêng như kem sầu riêng, sinh tố sầu riêng, xôi sầu riêng, bánh crepe sầu riêng,... cũng cực kỳ hấp dẫn không kém nhé!',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Nho đen nhập khẩu hộp 500g',
                'price' => '90000',
                'image' => 'nho-den-nhap-khau.jpg',
                'catalog_id' => '2',
                'description' => 'Là loại trái cây tươi cao cấp, có quả thuôn dài, vỏ mỏng, màu đen sẫm, không hạt, rất ngọt và giòn. Nho đen được nhập khẩu trực tiếp từ Nam Phi, đạt tiêu chuẩn xuất khẩu toàn cầu, loại sản phẩm này có giá trị dinh dưỡng cao, được cả trẻ em và người lớn đều thích',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Thanh long ruột đỏ túi 1.5kg (2-3 trái)',
                'price' => '37000',
                'image' => 'thanh-long-ruot-do.jpg',
                'catalog_id' => '2',
                'description' => 'Từ những vùng trồng thanh long nổi tiếng cả nước. Thanh long ruột đỏ túi 1kg tại Bách Hóa XANH có vẻ ngoài bóng bẩy đẹp mắt bên trong là thịt quả lòng đỏ vô cùng hấp dẫn chứa gấp đôi hàm lượng dinh dưỡng so với thanh long ruột trắng trắng thông thường. Cam kết chất lượng, bao bì sạch sẽ vệ sinh. Thanh long ruột đỏ có đặc tính hoàn toàn khác so với loại thanh long trắng. Thành phần dinh dưỡng có trong thanh long ruột đỏ được cho là gấp đôi so với thanh long ruột trắng. Đây là một trong những loại trái cây có thành phần dinh dưỡng phù hợp nhất cho việc giữ gìn dáng vóc và sắc đẹp của phụ nữ. Thanh long ruột đỏ túi 1.5kg (2-3 trái) 0. Thanh long là một loại trái cây được rất nhiều người yêu thích bởi vị ngọt thanh, chứa nhiều protein, các nhóm vitamin B2, B3, C và chứa nhiều sắt, kali, phốt pho… giúp tăng cường sức khỏe, mang lại cho bạn một cơ thể khỏe mạnh. Thanh long cũng cần phải biết cách chọn đó nha, không phải thấy màu đỏ là chọn được đâu. Thanh long ruột đỏ túi 1.5kg (2-3 trái) 1. Thanh long thì bạn có thể lột vỏ ăn luôn hoặc là chế biến thành một số món khác như: thạch thanh long, bánh mì ngọt thanh long, nước ép thanh long, bánh bao thanh long, sinh tố thanh long,...Mua ngay trái cây Bách Hóa XANH các loại với vô số sản phẩm giá tốt, chất lượng và an toàn',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Chuối già giống Nam Mỹ hộp 1kg (6-7 trái)',
                'price' => '24000',
                'image' => 'chuoi-gia-giong-nam-my.jpg',
                'catalog_id' => '2',
                'description' => 'Loại chuối được nhiều khách hàng ưa chuộng. Chuối chứa nhiều chất dinh dưỡng như kali, chất xơ, vitamin,... nên chuối có tác dụng tốt cho sức khoẻ như hỗ trợ giảm cân, hỗ trợ sức khoẻ tim mạch, cải thiện sức khoẻ của thận,...Cam kết đúng khối lượng, bao bì kín đáo, an toàn và bảo đảm hợp vệ sinh. Chuối là loại trái cây được nhiều người yêu thích và có rất nhiều loại chuối khác nhau như: chuối tiêu, chuối sứ, chuối tây,... Trong đó, chuối già giống Nam Mỹ là loại đang được nhiều người ưa chuộng hiện nay. Chuối già Nam Mỹ là giống chuối cấy mô, có nguồn gốc từ Nam Mỹ nên có chất lượng tốt và hương vị ngon, ngọt hơn hẳn so với các sản phẩm chuối khác. Loại trái cây nội địa này chứa nhiều chất dinh dưỡng như kali, chất xơ, vitamin,... nên chuối có tác dụng tốt cho sức khoẻ như: hỗ trợ giảm cân, hỗ trợ sức khoẻ tim mạch, cải thiện sức khoẻ của thận,... Bên cạnh đó, vỏ chuối còn có nhiều công dụng làm đẹp được nhiều chị em phụ nữ áp dụng. Lợi ích của việc ăn chuối trước khi ngủ: Ăn chuối trước khi ngủ sẽ mang đến những lợi ích vô cùng tốt cho sức khoẻ, chẳng hạn như: Dễ dàng vào giấc ngủ hơn, Kiểm soát axit dạ dày, Kiềm chế cơn thèm ngọt, Tăng cường chất xơ,...',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Dưa hấu đỏ trái từ 2kg trở lên',
                'price' => '30000',
                'image' => 'dua-hau-do-trai.jpg',
                'catalog_id' => '2',
                'description' => 'Dưa hấu đỏ với thành phần chủ yếu là nước và các vitamin, khoáng chất cần thiết đặc biệt là ít calo và chất béo nên dưa hấu được xem là một sản phẩm thay thế cho nước uống thông thường. Giúp giải khát thanh nhiệt mà còn bổ sung nhiều chất dinh dưỡng cho cơ thể, giúp bạn tràn đầy năng lượng. Dưa hấu đỏ là loại trái cây với vị ngọt thanh mát và rất giàu các chất dinh dưỡng cần thiết cho cơ thể. Dưa hấu chứa hàm lượng nước rất cao khoảng 91% trong thành phần và đặc biệt là gần như không có các chất như protein, chất béo. Dưa hấu chứa một lượng lớn các loại vitamin như vitamin C, B5, A,.. có tác dụng chống oxy hoá, hỗ trợ điều trị các vấn đề về đường tiêu hoá, các vấn đề về da, ngăn ngừa tiểu đường, ung thư và tăng cường chức năng của hệ miễn dịch. Xem thêm: Cách chọn và phân biệt các loại dưa hấu. Các lợi ích của dưa hấu với sức khỏe: Dưa hấu còn rất giàu các loại axit amin như citrulline và lycopene. Thành phần citrulline có trong vỏ màu trắng bao quanh ruột dưa hấu có tác dụng làm giảm huyết áp và là chất cần thiết có các cơ quan như: thận, phổi, gan, hệ thống miễn dịch,...Còn với lycopene là một thành phần tạo ra màu đỏ tươi của dưa hấu và có tác dụng chống oxy hóa mạnh. Nó có tác dụng làm giảm nguy cơ mắc bệnh ung thư, ngăn ngừa nguy cơ mắc bệnh tim, mang lại nhiều lợi ích cho não bộ và góp phần trong việc cải thiện làn da và tóc của bạn.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Dưa hấu không hạt trái từ 3kg trở lên',
                'price' => '57000',
                'image' => 'dua-hau-khong-hat-trai-tu-3kg-tro-len.jpg',
                'catalog_id' => '2',
                'description' => 'Dưa hấu không hạt với thành phần chủ yếu là nước và các vitamin, khoáng chất cần thiết đặc biệt là ít calo và chất béo nên dưa hấu được xem là một sản phẩm thay thế cho nước uống thông thường. Với ưu điểm không hạt, loại dưa hấu này khiến dễ dàng thưởng thức hoặc chế biến thành nhiều món ăn. Dưa hấu không hạt là loại trái cây với vị ngọt thanh mát và rất giàu các chất dinh dưỡng cần thiết cho cơ thể. Dưa hấu chứa hàm lượng nước rất cao khoảng 91% trong thành phần và đặc biệt là gần như không có các chất như protein, chất béo. Dưa hấu có tác dụng chống oxy hoá, hỗ trợ điều trị các vấn đề về đường tiêu hoá, các vấn đề về da, ngăn ngừa tiểu đường, ung thư và tăng cường chức năng của hệ miễn dịch. Ngoài ra, với ưu điểm không hạt, loại dưa hấu này khiến nhiều người thích thú vì không cần bỏ hạt khi thưởng thức lại dễ dàng chế biến thành nhiều món ăn. Giá trị dinh dưỡng của dưa hấu. Dưa hấu còn rất giàu các loại axit amin như citrulline và lycopene. Thành phần citrulline có trong vỏ màu trắng bao quanh ruột dưa hấu có tác dụng làm giảm huyết áp và là chất cần thiết có các cơ quan như: thận, phổi, gan, hệ thống miễn dịch,...Còn với lycopene là một thành phần tạo ra màu đỏ tươi của dưa hấu và có tác dụng chống oxy hóa mạnh. Nó có tác dụng làm giảm nguy cơ mắc bệnh ung thư, ngăn ngừa nguy cơ mắc bệnh tim, mang lại nhiều lợi ích cho não bộ và góp phần trong việc cải thiện làn da và tóc của bạn. Thưởng thức dưa hấu đúng cách: Trà dưa hấu mát lạnh, Bingsu dưa hấu, Salad dưa hấu, Kem dưa hấu,... Dưa hấu là loại quả rất thích hợp để thưởng thức trong những ngày nắng nóng oi bức, chúng cung cấp hàm lượng nước và chất xơ dồi dào, giúp cơ thể xua tan cơn nóng, bù nước nhanh chóng. Tuy nhiên, ăn quá nhiều dưa hấu lại khiến cơ thể trở nên nóng trong người, khan tiếng,...',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Lê đá hộp 1kg (4-6 trái)',
                'price' => '45000',
                'image' => 'le-da-hop.jpg',
                'catalog_id' => '2',
                'description' => 'Lê đá là một loại trái cây vô cùng giòn, ngọt, mọng nước, rất thích hợp ăn để giải nhiệt cho những trưa nắng nóng. Lê đá quả to tròn, mọng nước, ăn rất thích, phù hợp với khẩu vị của tất cả các thành viên trong gia đình. Lê đá là một loại trái cây được nhập khẩu từ Trung Quốc vô cùng giòn, ngọt, mọng nước, rất thích hợp ăn để giải nhiệt cho những trưa nắng nóng. Trái lê đá to căng tròn, cầm chắc tay, lớp vỏ căng bóng mắt. Lê ngon, ngọt, giòn, thích hợp với khẩu vị của của gia đình. Giá trị dinh dưỡng của lê đá: Theo y dược học cổ truyền, lê có tính mát, vị chua và thanh nhiệt, nhuận phế, tiêu đờm, giảm ho hiệu quả. Lê còn giàu các chất dễ tan, chống tiểu đường và giúp cắt cơn đói nhanh chóng nên thường được dùng làm salad để giảm cân. Lê còn có tanin nên giúp bảo vệ tim mạch hiệu quả. Trong 100g lê sẽ có 86,5g nước; 0.1g chất béo; 0.2g protein; 11g carbohydrat,... cùng các chất khác. ',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Ổi Đài Loan vỉ 1kg (4-5 trái)',
                'price' => '21000',
                'image' => 'oi-dai-loan-vi.jpg',
                'catalog_id' => '2',
                'description' => 'Ổi Đà Loan là giống ổi này có vị ngọt man mát, hơi xốp, giòn, thơm nhè nhẹ, đặc biệt rất ít hạt cho cảm giăc ăn vô cùng thích thú. Trong ổi chứa nhiều vitamin giúp tăng cường miễn dịch, đẹp da, giảm cân,...Cam kết bán đúng khối lượng, chất lượng và an toàn, bao bì kín đáo sạch sẽ vệ sinh. Ổi Đài Loan là một giống ổi vừa du nhập vào nước ta vài năm trở lại đây và mang nhiều ưu điểm nổi trội hơn so với những giống trái cây tươi ngon hiện có như quả to sáng bóng ăn rất giòn và ngọt đặc biệt là rất ít hạt. Giống ổi này có vị ngọt man mát, hơi xốp, giòn, thơm nhè nhẹ, ăn rất là thích thú. Ổi ngon nhất là khi để lạnh, chấm muối ớt ăn giòn giòn rộp rộp đã miệng vô cùng. Ổi Đài Loan vỉ 1kg (4-5 trái) 0. Loài trái cây này không những ngon mà lại còn ổi còn có rất nhiều lợi ích cho sức khoẻ, ổi rất giàu chất chống oxy hóa, Vitamin C, Kali và chất xơ. Các dưỡng chất này sẽ là yếu tố làm nên lợi ích nhiều mặt về sức khỏe dành cho chúng ta. Có thể kể đến một vài công dụng của ổi đối với sức khoẻ như: giảm đường huyết, giúp tim khoẻ mạnh, giảm cân, tăng cường hệ miễn dịch, đẹp da,... Ổi Đài Loan vỉ 1kg (4-5 trái) 1. Cách chọn ổi cũng vô cùng quan trọng để bạn có thể chọn những quả ngon ngọt đó nha. Ổi sau khi mua về thì bạn có thể ăn ngay hoặc làm nước ép uống cũng rất mát.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Ổi nữ hoàng vỉ 1kg (4-5 trái)',
                'price' => '23000',
                'image' => 'oi-nu-hoang-vi.jpg',
                'catalog_id' => '2',
                'description' => 'Ổi nữ hoàng loại trái cây được ưa chuộng tại Việt Nam. Ổi Nữ Hoàng có phần thịt khá dày và ruột rất nhỏ ít hạt khi ăn vào sẽ có vị giòn, ngọt thanh kích thích ăn mãi không ngừng. Trong ổi chứa nhiều vitamin giúp tăng cường miễn dịch, đẹp da, giảm cân,... Giống như tên gọi ổi Nữ Hoàng đã được mệnh danh là vua của những loài ổi do ưu điểm về giá cả và chất lượng. Ổi thì cũng có rất nhiều loại thế nhưng từ khi được du nhập về thì ổi Nữ Hoàng đã chiếm lấy trái tim của người dùng trong số các loại trái cây hiện nay. Ổi Nữ Hoàng to hơn các giống ổi ta, mỗi trái trung bình khoảng 400g. Khi tách ổi ra bạn sẽ thấy bên trong phần thịt khá dày và ruột rất nhỏ, có một ít hạt. Khi ăn vào sẽ có vị giòn, ngọt thanh kích thích ăn mãi không ngừng. Ổi nữ hoàng vỉ 1kg (4-5 trái) 0. Loại trái cây này không những ngon mà ổi còn có rất nhiều lợi ích cho sức khoẻ, ổi rất giàu chất chống oxy hóa, Vitamin C, Kali và chất xơ. Các dưỡng chất này sẽ là yếu tố làm nên lợi ích nhiều mặt về sức khỏe dành cho chúng ta. Có thể kể đến một vài công dụng của ổi đối với sức khoẻ như: giảm đường huyết, giúp tim khoẻ mạnh, giảm cân, tăng cường hệ miễn dịch, đẹp da,... Ổi nữ hoàng vỉ 1kg (4-5 trái) 1. Cách chọn ổi cũng vô cùng quan trọng để bạn có thể chọn những quả ngon ngọt đó nha. Ổi sau khi mua về thì bạn có thể ăn ngay hoặc làm nước ép uống cũng rất tuyệt vời.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Cóc lớn túi 1kg (4-6 trái)',
                'price' => '29000',
                'image' => 'coc-lon-tui.jpg',
                'catalog_id' => '2',
                'description' => 'Là loại trái cây nhiệt đới có quả giòn, ngọt dịu, pha ít vị chua nhẹ nhàng dễ chịu, ăn trực tiếp hoặc làm ước ép đều rất thơm ngon và bổ dưỡng. Cóc lớn túi 500g tại Bách Hóa XANH được đóng gói cẩn thận, hợp vệ sinh giúp giữ nguyên chất lượng và bề ngoài sản phẩm. Cam kết bán đúng khối lượng. Cóc là loại trái cây xích đạo và phát triển tốt ở vùng khí hậu nhiệt đới. Quả cóc có vị chua chua thanh thanh là món ăn vặt yêu thích của nhiều chị em phụ nữ. Cóc lớn túi 1kg (4-6 trái) 0. Quả cóc chứa nhiều loại vitamin và khoáng chất có tác dụng giải nhiệt và kích thích vị giác. Bên cạnh đó, cóc còn có nhiều công dụng tốt cho sức khoẻ như: ngăn ngừa lão hoá, tăng cường hệ miễn dịch, hỗ trợ hoạt động hệ tiêu hoá,... Ngoài những tác dụng tốt cho sức khoẻ, loại trái cây đặc trưng này còn có tác dụng làm đẹp và chăm sóc làn da nhờ vào hàm lượng vitamin C có trong cóc giúp thúc đẩy quá trình sản sinh collagen. Cóc lớn túi 1kg (4-6 trái) 1. Cóc thường được mọi người sử dụng ăn trực tiếp như các loại trái cây thông thường hoặc chế biến thành các món như cóc ngâm, nước ép cóc, chân gà sả tắc cóc non.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Chanh dây hộp 500g (4-6 trái)',
                'price' => '18000',
                'image' => 'chanh-day-hop.jpg',
                'catalog_id' => '2',
                'description' => 'Chanh dây của Bách Hóa Xanh được đóng gói và bảo quản theo những tiêu chuẩn nghiêm ngặt về vệ sinh và an toàn thực phẩm, đảm bảo về chất lượng, độ tươi và ngon của thực phẩm, xuất xứ rõ ràng. Chanh dây cỏ thể dùng để chế biến các món như nước ép chanh dây, sinh tố chanh dây,...',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Kiwi vàng Zespri hộp 500g (3-5 trái)',
                'price' => '100000',
                'image' => 'kiwi-vang-tui.jpg',
                'catalog_id' => '2',
                'description' => 'Loại trái cây có vỏ màu nâu vàng, trơn nhẵn, không có lông xù xì như kiwi xanh, thịt quả có màu xanh tươi mát nhìn rất đẹp mắt và hấp dẫn, ăn vào có vị ngọt mát rất đặc trưng. Chứa hàm lượng vitamin C giúp tăng cường đề kháng cho cơ thể khỏe mạnh. Cam kết giao đúng khối lượng, chất lượng và vệ sinh. Quả kiwi không được mấy ấn tượng với lớp lông xù xì và có màu nâu xám bên ngoài nhưng đây được xem là loại trái cây có nhiều lợi ích cho sức khỏe người dùng. Tại Bách hoá XANH, kiwi vàng Zespri là loại trái cây nhập khẩu được nhiều bà nội trợ yêu thích và tin dùng. Kiwi vàng Zespri hộp 500g (3-5 trái) 0. Kiwi vàng có xuất xứ từ New Zealand có đài ở đầu quả và thuôn dài hơn so với kiwi xanh. Chúng có vỏ màu nâu vàng, trơn nhẵn, không có lông xù xì như kiwi xanh. Kiwi vàng có thịt quả màu vàng trong rất đẹp mắt, với nhiều hạt đen tạo thành một vòng tròn xung quanh trục dọc của quả và vị ngọt mát rất đặc trưng. Đây là loại quả ngon số 1 thế giới, với quy trình từ trồng, chăm bón đến thu, hái, vận chuyển được chính phủ New Zealand kiểm soát rất chặt chẽ để đảm bảo quả kiwi luôn đồng đều và tiêu chuẩn. GIÁ TRỊ DINH DƯỠNG CỦA KIWI: Kiwi mang đến nhiều lợi ích cho sức khoẻ. Trung bình 2 trái kiwi có thể cung cấp khoảng 230% lượng Vitamin C, gần gấp đôi so với cam. Giúp vết thương nhanh lành, hấp thụ sắt để xương, mạch máu và răng chắc khỏe hơn. Hỗ trợ giấc ngủ và tăng cường sự tỉnh táo vào buổi sáng. 2 trái kiwi chứa khoảng 30mg Magie, lượng Kali nhiều hơn chuối khoảng 20%, kiểm soát được huyết áp, ngăn ngừa sỏi thận, loãng xương và đột quỵ. Giúp trái tim của bạn khỏe mạnh, điều hòa quá trình tiêu hóa và kiểm soát cholesterol,... Kiwi vàng Zespri hộp 500g (3-5 trái) 1. NHỮNG MÓN NGON TỪ KIWI: Salad kiwi cho bữa ăn đầy dưỡng chất, Kem dưa hấu kiwi thanh mát giải nhiệt, Mứt kiwi giòn giòn, chua ngọt',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Nho đỏ không hạt hộp 500g',
                'price' => '90000',
                'image' => 'nho-do-khong-hat-hop.jpg',
                'catalog_id' => '2',                
                'description' => 'Nho đỏ không hạt tại Bách Hóa XANH được nhập khẩu từ Úc quả to, chắc thịt, thơm ngon mọng nước chứa hàm lượng vitamin dồi dào. Cam kết đúng khối lượng, chất lượng và an toàn, bao bì kín đáo, bảo đảm hợp vệ sinh',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Chuối sứ nải từ 1.5kg trở lên',
                'price' => '27000',
                'image' => 'chuoi-su-nai-tu.jpg',
                'catalog_id' => '2',                
                'description' => 'Chuối sứ chứa rất nhiều chất dinh dưỡng cần thiết cho cơ thể, hương vị bùi bùi ngọn dịu vô cùng hấp dẫn. Ngoài ăn trực tiếp chuối còn có thể dùng chế biến nhiều món ăn ngon hấp dẫn như sinh tố, chè, bánh, kem, sữa,...Sản phẩm cam kết đúng khối lượng, bao bì kín đáo, an toàn và bảo đảm hợp vệ sinh. Chuối sứ là một trong những loại trái cây được tiêu thụ rộng rãi nhất trên thế giới vì chúng mang lại giá trị dinh dưỡng lớn cho sức khỏe con người. Ngày nay, chuối được trồng chủ yếu ở vùng Đông Nam Á và được xếp hạng trong số các loại cây lương thực quan trọng của thế giới. Bách Hóa Xanh nhận thấy chuối sứ có chứa nhiều thành phần dinh dưỡng, đặc biệt các loại vitamin, tinh bột, protein, các chất khoáng như magie, natri, canxi, kẽm, sắt, kali, phosphat,..Cách sơ chế, bảo quản chuối để sử dụng: Chuối là loại trái cây nội địa được nhiều người ưa thích. Tuy nhiên, nếu chuối không được bảo quản đúng cách thì sẽ rất nhanh hỏng. Bách hóa XANH chỉ bạn mẹo giữ chuối chín được lâu này nhé. Chuối là nguyên liệu chính để chế biến các món ngon sau đây: Bánh nậm nhân chuối ngon không tưởng, Ăn sáng ngon lành với bánh mì chuối, Chè chuối bột báng ngon miệng, Dáng xinh da đẹp với sinh tố bơ chuối cực ngon, Bánh chuối nướng nước dừa béo ngon ngọt, Quay về tuổi thơ với kem chuối đơn giản, Sữa chuối làm bạn bao mê mẫn.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Táo Star nhập khẩu New Zealand túi 1kg (4 - 6 trái)',
                'price' => '69000',
                'image' => 'tao-star-nhap-khau.jpg',
                'catalog_id' => '2',
                'description' => 'Táo Star nhập khẩu túi 1kg là một giống táo của New Zealand được rất nhiều người ưa chuộng. Táo ăn giòn, có vị ngọt, ăn hoài sẽ rất nghiện bởi vị ngọt đậm và tươi xốp của nó. Táo Star nhập khẩu New Zealand là giống táo lai từ một nhánh đặc biệt của giống cây táo Royal Gala, được trồng nhiều tại vùng đồng bằng ở Waimea thuộc vùng Nelson của New Zealand. Táo có màu đỏ tươi vô cùng bắt mắt, sáng mịn, vỏ mỏng bóng, cuốn hút ngay từ cái nhìn đầu tiên. Không những là loại trái cây nhập khẩu được nhiều người yêu thích bởi vị ngọt đậm, tươi xốp, chắc thịt, ăn giòn và chứa nhiều thành phần dinh dưỡng, tốt cho sức khỏe mà táo Star còn là loại trái cây rất tốt cho bà bầu, cung cấp những dưỡng chất cần thiết cho thai nhi. Giá trị dinh dưỡng trong táo Star: Chứa nhiều chất pectin, làm giảm cholesterol và chất chống oxy hóa, ngăn ngừa bệnh tim. Hàm lượng axit Ursolic có trong táo giúp thúc đẩy việc đốt cháy calo; tăng việc hình thành cơ, giảm nguy cơ béo phì. Lượng magiê và kali trong táo giúp điều chỉnh áp suất máu và giữ cho nhịp đập tim ở mức ổn định,...',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Táo Rockit nhập khẩu ống 4 quả',
                'price' => '145000',
                'image' => 'tao-rockit-phap.jpg',
                'catalog_id' => '2',
                'description' => 'Loại táo nhập khẩu nguồn gốc từ Pháp, New Zealand,... có vỏ ngoài màu hồng đậm pha chút sắc vàng nhìn qua khá giống với quả xuân đào, căng bóng và cầm rất chắc tay, có tác dụng giảm cân, đẹp da, rất được nhiều chị em phụ nữ ưa chuộng. Cam kết giao đúng khối lượng, chất lượng và an toàn. Táo Rockit là loại trái cây nhập khẩu cao cấp nhất hiện nay ở Việt Nam. Loại táo này có hình dáng nhỏ, vỏ ngoài màu hồng đậm pha chút sắc vàng nhìn qua khá giống với quả xuân đào, căng bóng và cầm rất chắc tay, có tác dụng giảm cân, đẹp da, rất được nhiều chị em phụ nữ ưa chuộng. Đặc biệt là thịt táo Rockit chắc giòn, hàm lượng nước cao, phần thịt màu trắng ngà như kem và có vị ngọt đậm, độ giòn và mùi thơm đặc trưng. Táo Rockit nhập khẩu ống 4 quả 0. CÔNG DỤNG CỦA TÁO ROCKIT: Trong một quả táo có ít hơn 100 calories, 17% các giá trị chất xơ và khoảng 14% vitamin C có lợi cho sức khỏe. Thay cho các món tinh bột vừa đảm bảo đủ no, chống đói, chống thèm ăn mà vẫn vẫn cung cấp đủ năng lượng và chất dinh dưỡng. Chứa một lượng nhỏ quercetin, boron và Vitamin B. Chứa nhiều chất xơ, kích thích hoạt động tiêu hóa, cân bằng hấp thu dinh dưỡng. Hàm lượng phytonutrient dồi dào gồm kaempferol và quercetin giúp làm chậm sự phát triển của tế bào có hại, từ đó ngăn ngừa cơ thể mắc những căn bệnh ung thư phổ biến. Táo Rockit nhập khẩu ống 4 quả 1. BẢO QUẢN TÁO ĐÚNG CÁCH: Bảo quản ở nhiệt độ từ 0-4 độ C, trái táo có thể giữ được độ tươi ngon, giòn và nhiều nước tối đa là 3 tháng. Sau khoảng thời này, độ đường tăng cao và sẽ mất dần độ giòn. Nhiệt độ bảo quản trong tủ lạnh từ 4 đến 8 độ C giúp táo giữ được độ tươi, độ giòn trong vòng 2 tuần kể từ lúc mua về trái táo vẫn giữ nguyên được độ tươi, giòn và ngọt. Cần tránh để táo với các thực phẩm có mùi khác như hành, tỏi, táo sẽ dễ nhiễm mùi. ',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Xoài keo vàng túi 1kg (2-4 trái)',
                'price' => '30000',
                'image' => 'xoai-keo-vang-tui.jpg',
                'catalog_id' => '2',
                'description' => 'Loại trái cây giàu chất xơ, vitamin, khoáng chất thiết yếu giúp cung cấp chất dinh dưỡng cho cơ thể con người, mang lại nhiều lợi ích tuyệt vời cho hệ tiêu hóa, tim mạch, giúp mắt sáng, làm đẹp da. Xoài keo có quả chắc giòn giòn chua ngọt thơm ngon, có thể ăn khi quả chín hoặc còn sống đều rất ngon. Xoài keo vàng là loại trái cây nội địa được yêu thích nhất đối với hội chị em mê ăn vặt. Xoài thịt vàng ươm, ăn vị ngọt lấn át vị chua nhưng không phải giống vị ngọt của xoài cát chín mà vẫn thấy rõ được vị chua thanh. Xoài cắn rất giòn, chấm thêm với muối hoặc đơn giản là bột canh thường cũng đủ để bay vèo cả đĩa rồi. Xoài keo có thể thưởng thức được cả khi xanh lẫn chín đều ngon bởi trong tất cả các loại xoài hiện nay thì xoài keo là loại rất ít chua, ngay cả khi còn non. Đặc biệt, cho tới thời điểm vỏ quả chuyển sang màu vàng, xoài vẫn có thể đạt được độ giòn ngon hấp dẫn. Bởi thế, xoài keo vàng là loại trái cây yêu thích của rất nhiều chị em. Xoài keo vàng có thể được sử dụng như một loại quả để ăn vặt hoặc có thể chế biến cùng các món nộm, salad… hay làm món xoài dầm chua ngọt giòn ngon, cay cực hấp dẫn. Sơ chế xoài: Xoài mua về bạn gọt sạch vỏ, sau đó rửa qua nước cho sạch mủ xoài. Sau đó tùy theo sở thích hoặc nhu cầu món ăn, đồ uống bạn muốn chế biến mà gọt thịt xoài.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Mận An Phước túi 1kg (7-9 trái)',
                'price' => '30000',
                'image' => 'man-an-phuoc-tui.jpg',
                'catalog_id' => '2',
                'description' => 'Chín đỏ mọng đẹp mắt, màu sắc hấp dẫn, vị chua ngọt vừa phải dễ chịu . Mận An Phước chứa nhiều vitamin, chất xơ và khoáng chât nhưng không chứa thành phần chất béo tốt cho cơ thể. Cam kết bán đúng khối lượng, chất lượng và an toàn, bao bì kín đáo sạch sẽ vệ sinh. Mận An Phước là giống mận được ghép từ mắt của giống Thongsamsri Thái Lan với gốc mận xanh đường Việt Nam. Mận An Phước có hình dạng cái chuông, đế to, màu vỏ đỏ sẫm không có gân xanh. Mận An Phước túi 1kg (7-9 trái) 0. Mận An Phước có vị rất ngon và hàm lượng dinh dưỡng cao không thua kém các loại trái cây khác. Mận có nhiều tác dụng tốt cho sức khoẻ như: tốt cho xương khớp, cải thiện trí nhớ, hỗ trợ tiêu hoá, ngăn ngừa ung thư,... Mận An Phước túi 1kg (7-9 trái) 1. Mận thường được sử dụng để ăn trực tiếp hoặc chế biến thành các món như: mận lắc, siro mận, kem mận sữa chua,...',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Lựu hộp 1kg (2-3 trái)',
                'price' => '90000',
                'image' => 'luu-tui.jpg',
                'catalog_id' => '2',
                'description' => 'Lựu túi 1kg của Bách Hóa Xanh được đóng gói và bảo quản theo những tiêu chuẩn nghiêm ngặt về vệ sinh và an toàn thực phẩm, đảm bảo về chất lượng, độ tươi và ngon của thực phẩm, xuất xứ rõ ràng. Lựu có thể ăn liền cũng có thể chế biến các món như nước ép lựu, sinh tố lựu. Lựu nhập khẩu Trung Quốc được xem là một trong những loại trái cây nhập khẩu tốt nhất cho sức khỏe. Trong quả lựu chứa một loạt các hợp chất từ thực vật có lợi mà nhiều loại thực phẩm khác không thể so sánh được. Các nghiên cứu đã cho thấy rằng chúng có nhiều lợi ích và làm giảm nguy cơ mắc nhiều bệnh khác nhau. Với hương vị thơm ngon đặc trưng và giá trị dinh dưỡng đối với sức khỏe, lựu đang được rất nhiều chị em ưa chuộng. Trong quả lựu có chứa nhiều chất oxy hóa, vitamin C và nhiều dưỡng chất khác có tác dụng làm đẹp, tăng cường hệ miễn dịch và bảo vệ sức khỏe. Có thể nói, với mức giá phải chăng, chất lượng dinh dưỡng cao, lựu không thua kém gì các loại trái cây nội địa khác.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Nước ép lựu Juss 1 lít',
                'price' => '44000',
                'image' => 'nuoc-ep-luu-juss.jpg',
                'catalog_id' => '3',
                'description' => 'Sản phẩm nước ép trái cây chất lượng thơm ngon của thương hiệu Juss đến từ Thổ Nhĩ Kỳ. Nước ép lựu Juss lựu đỏ 1 lít từ quả lựu tươi ngon chứa nhiều vitamin và dinh dưỡng giúp giải khát nhanh chóng, cung cấp năng lượng cho cơ thể khỏe mạnh đồng thời mang lại hiệu quả làm đẹp da rất tốt. Hướng dẫn sử dụng Lắc đều trước khi sử dụng. Ngon hơn khi uống lạnh. Bảo quản lạnh sau khi mở bao bì và sử dụng trong vòng 2 ngày. Sử dụng tốt nhất trước ngày hết hạn được ghi trên phần đầu của hộp.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Nước ép đào & táo Fontana 1 lít',
                'price' => '44000',
                'image' => 'nectar-dao-tao-fontana.jpg',
                'catalog_id' => '3',
                'description' => 'Kết hợp 2 giữa đào xay nhuyễn & nước ép táo chứa nhiều khoáng chất như kali, canxi, phốt pho, sắt, silicon, magie, giảm các bệnh viêm khớp và thấp khớp. Ngoài ra thành phần chứa nhiều chất chống ô xy hóa, vitamin C nên giảm thiểu nếp nhăn, xóa dấu hiệu tuổi tác trên làn da. Ngoài các tác dụng hỗ trợ sức khỏe rất tốt từ nước ép táo, đào cũng mang lại nhiều tác dụng hỗ trợ sức khỏe bất ngờ, quả đào cung cấp rất nhiều vitamin, nước và khoáng chất cho cơ thể. Ngoài ra, nó còn có nhiều công dụng tốt cho sức khỏe như giúp điều hòa giấc ngủ, tốt cho hệ miễn dịch, tăng cường trí nhớ,... Sản phẩm có chứa axit citric giúp tăng cường khả dụng sinh học của các khoáng chất, cho phép cơ thể hấp thụ chúng tốt hơn, giúp chuyển hóa thức ăn thành năng lượng cung cấp cho cơ thể. Mỗi ngày 1 ly nước ép ngoài việc cung cấp năng lượng, còn giúp bạn cung cấp nước cho cơ thể, chống lại tình trạng mất nước, giúp bạn tỉnh táo, tập trung và ngủ ngon hơn. Chất lượng nhập khẩu với mức giá phải chăng. Nước ép Fontana được sản xuất tại Cộng hòa Síp với nguồn nguyên liệu tươi được trồng trên những trang trại chuyên biệt, sản phẩm đã được kiểm định và công nhận không chứa các chất gây hại đến sức khỏe người tiêu dùng. Fontana là sản phẩm nước ép được nhập khẩu chính hãng từ Cộng hòa Síp, rất được người tiêu dùng ưa chuộng bởi chất lượng xứng danh "hàng nhập khẩu" của mình nhưng Fontana lại không có giá thành cao như các sản phẩm nước ép nhập khẩu thông thường mà lại có mức giá rất phải chăng, cạnh tranh kể cả so với các sản phẩm trong nước, giúp cho người tiêu dùng có thêm một sự lựa chọn bổ sung dinh dưỡng cho gia đình.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Nước ép xoài Zoi 1 lít',
                'price' => '44000',
                'image' => 'nuoc-ep-nectar-xoai.jpg',
                'catalog_id' => '3',
                'description' => 'Sản phẩm nước trái cây chất lượng thơm ngon thương hiệu Zoi từ Cộng Hòa Síp. Nước ép nectar xoài Zoi 1 lít từ quả xoài tươi ngon, mọng nước chứa nhiều vitamin và dinh dưỡng giúp giải khát nhanh chóng, cung cấp năng lượng cơ thể khỏe mạnh đồng thời nước ép cũng có tác dụng tốt với làn da của bạn. Thành phần 35% nước ép xoài cô đặc (nước, xoài xay nhuyễn cô đặc, đường, chất điều chỉnh độ acid, hương liệu tự nhiên (xoài), chất chống oxy hoá), hương liệu xoài tự nhiên. Hướng dẫn sử dụng Lắc đều trước khi sử dụng. Ngon hơn khi uống lạnh. Bảo quản lạnh sau khi mở bao bì và sử dụng trong vòng 4 ngày. Sử dụng tốt nhất trước ngày hết hạn được ghi trên phần đầu của hộp.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Nước ép nectar mơ Juss 1 lít',
                'price' => '44000',
                'image' => 'nuoc-ep-nectar-mo.jpg',
                'catalog_id' => '3',
                'description' => 'Sản phẩm nước ép trái cây chất lượng thơm ngon của thương hiệu Juss đến từ Thổ Nhĩ Kỳ. Nước ép mơ nectar Juss 1 lít từ quả mơ tươi ngon thanh mát chứa nhiều vitamin và dinh dưỡng giúp giải khát nhanh chóng, cung cấp năng lượng, có lợi cho sức khỏe đồng thời mang lại hiệu quả làm đẹp da rất tốt. Thành phần Nước, mơ xay nhuyễn cô đặc, đường, chất điều chỉnh acid,.. Hướng dẫn sử dụng Lắc đều trước khi sử dụng. Ngon hơn khi uống lạnh. Bảo quản lạnh sau khi mở bao bì và sử dụng trong vòng 2 ngày. Sử dụng tốt nhất trước ngày hết hạn được ghi trên phần đầu của hộp.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Nước ép cam Zoi 1 lít',
                'price' => '44000',
                'image' => 'nuoc-ep-cam-zoi.jpg',
                'catalog_id' => '3',
                'description' => 'Sản phẩm nước trái cây chất lượng thơm ngon thương hiệu Zoi từ Cộng Hòa Síp. Nước ép cam Zoi 1 lít từ những quả cam chín mọng, tươi ngon chứa nhiều vitamin và dinh dưỡng giúp giải khát nhanh chóng, cung cấp năng lượng cơ thể khỏe mạnh đồng thời nước ép cũng có tác dụng tốt với làn da của bạn. Thành phần làm từ 100% nước ép cam cô đặc. Hướng dẫn sử dụng Lắc đều trước khi sử dụng. Ngon hơn khi uống lạnh. Bảo quản lạnh sau khi mở bao bì và sử dụng trong vòng 2 ngày. Sử dụng tốt nhất trước ngày hết hạn được ghi trên phần đầu của hộp.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Nước ép nho Juss 1 lít',
                'price' => '44000',
                'image' => 'nuoc-ep-nho.jpg',
                'catalog_id' => '3',
                'description' => 'Sản phẩm nước ép trái cây chất lượng thơm ngon của thương hiệu Juss đến từ Thổ Nhĩ Kỳ. Nước ép nho Juss 1 lít từ quả nho tươi ngon chứa nhiều vitamin và dinh dưỡng giúp giải khát nhanh chóng, cung cấp năng lượng, có lợi cho sức khỏe đồng thời mang lại hiệu quả làm đẹp da rất tốt. Thành phần Nước, nước ép nho cô đặc, chất điều chỉnh độ acid, chất tạo màu, hương liệu nho tự nhiên,... Hướng dẫn sử dụng Lắc đều trước khi sử dụng. Ngon hơn khi uống lạnh. Bảo quản lạnh sau khi mở bao bì và sử dụng trong vòng 2 ngày. Sử dụng tốt nhất trước ngày hết hạn được ghi trên phần đầu của hộp.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Nước ép ổi Vfresh 1 lít',
                'price' => '33000',
                'image' => 'nuoc-ep-oi-vfresh.jpg',
                'catalog_id' => '3',
                'description' => 'Sản phẩm nước ép trái cây đóng hộp pha chế sẵn vô cùng tiện lời từ nước ép ổi tự nhiên chứa nhiều vitamin và chất dinh dưỡng đến từ thương hiệu nước ép Vfresh nổi tiếng chất lượng. Nước ép ổi Vfresh 1 lít mang đến cho gia đình bạn nguồn ngăn lượng khỏe mạnh mà tươi tắn cả ngày. Thành phần Nước, nước ổi ép 25%, đường, chất ổn định (440), chất điều chỉnh độ acid (330), hương ổi giống tự nhiên dành cho thực phẩm, vitamin C. Hướng dẫn sử dụng Uống trực tiếp, lắc đều trước khi sử dụng, ngon hơn khi uống lạnh. Giữ lạnh sau khi mở nắp và sử dụng trong vòng 03 ngày.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Nước ép cam Vfresh 1 lít',
                'price' => '39000',
                'image' => 'nuoc-ep-cam-vfresh.jpg',
                'catalog_id' => '3',
                'description' => 'Sản phẩm nước ép trái cây chất lượng tự thương hiệu Vfresh. Nước ép cam 100% Vfresh 1 lít từ quả cam tươi ngon, mọng nước, không phẩm màu, không sử dụng chất bảo quản cho hương vị thanh ngọt tự nhiên, giúp giải nhanh cơn khát, cung cấp vitamin và năng lượng cho cơ thể khỏe mạnh. Thành phần Nước cam ép từ nước cam cô đặc (50%), đường tinh luyện, chất ổn định (440),... Hướng dẫn sử dụng Lắc đều trước khi sử dụng. Ngon hơn khi uống lạnh. Thông tin sản phẩm. Nước ép cam Vfresh được làm từ những trái cam mọng nước giàu dưỡng chất, vitamin C, cho cơ thể khỏe mạnh và tràn đầy sức sống. Sản phẩm giúp tăng cường sức đề kháng, cho cơ thể khỏe mạnh mỗi ngày, giúp bù năng lượng cho cơ thể sau khi vận động và đem lại làn da mịn màng, tươi trẻ cho chị em phụ nữ.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Nước ép táo nho Naturalis Apple - Grape 1 lít',
                'price' => '44000',
                'image' => 'nuoc-ep-tao-nho-naturalis.jpg',
                'catalog_id' => '3',
                'description' => 'Nước ép trái cây thơm ngon bổ dưỡng từ thương hiệu Naturalis được ưa thích tại Moldova. Nước ép táo nho Naturalis Apple - Sour cherry 1 lít được làm từ những quả táo và nho tươi ngon chứa nhiều vitamin và dinh dưỡng giúp giải khát nhanh chóng, bổ sung năng lượng cho cơ thể khỏe mạnh sảng khoái. Thành phần Nước ép táo (30%), nước ép nho (20%), đường (6.2%), axit citric (0.35%), nước (43.45%). Hướng dẫn sử dụng Lắc đều trước khi sử dụng. Ngon hơn khi uống lạnh trong nhiệt độ từ 0 đến 25 độ C. Bảo quản lạnh sau khi mở nắp và tốt nhất sử dụng trong 24h kể từ khi mở nắp.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Nước ép nho 100% Vfresh 1 lít',
                'price' => '52000',
                'image' => 'nuoc-ep-nho-100-vfresh.jpg',
                'catalog_id' => '3',
                'description' => 'Sản phẩm nước ép trái cây chất lượng từ thương hiệu Vfresh được chiết xuất từ nước nho cô đặc 100%, với hương vị thơm ngon, nguyên chất cùng quy trình chế biến và đóng gói phù hợp với các qui định an toàn vệ sinh thực phẩm là thức uống cung cấp nguồn năng lượng dồi dào mỗi ngày cho cả gia đình. Nước ép nho Vfresh được chiết xuất từ nước nho cô đặc 100%, với hương vị thơm ngon, nguyên chất cùng quy trình chế biến và đóng gói phù hợp với các qui định an toàn vệ sinh thực phẩm là thức uống cung cấp nguồn năng lượng dồi dào mỗi ngày cho cả gia đình. Một lít nước ép nho 100% Vfresh được làm từ khoảng 2.6 kg nho tươi nguyên chất, không biến đổi gen, không chất bảo quản, không sử dụng màu thực phẩm, không bổ sung đường, giàu vitamin C tự nhiên, giúp hỗ trợ miễn dịch, cho bạn cơ thể bạn khỏe mạnh. Nước ép nho Vfresh 1 Lít giúp tăng cường sức đề kháng, duy trì trạng thái cân bằng giữa vi khuẩn tốt và vi khuẩn có hại trong đường ruột giúp hệ tiêu hóa vận hành thuận lợi hơn và cung cấp nhiều vitamin cho cơ thể. Sản phẩm còn có tác dụng giải nhiệt rất tốt, giúp bù nước, năng lượng, xua tan cơn khát cho cơ thể sau khi vận động và đem lại làn da mịn màng, tươi trẻ cho chị em phụ nữ.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Nước ép táo 100% Vfresh 1 lít',
                'price' => '44000',
                'image' => 'nuoc-tao-vfresh.jpg',
                'catalog_id' => '3',
                'description' => 'Sản phẩm nước ép trái cây từ thương hiệu Vfresh được làm từ nguyên liệu tự nhiên tươi ngon có hương vị ngọt dịu, thơm mát từ những trái táo tươi ngon, sản phẩm chứa nhiều khoáng chất, dinh dưỡng, chất chống oxy hóa, lượng vitamin C cao tốt cho sức khỏe. Nước ép táo Vfresh được làm từ 100% táo tự nhiên có hương vị ngọt dịu, thơm mát từ những trái táo tươi ngon, sản phẩm chứa nhiều khoáng chất, dinh dưỡng, chất chống oxy hóa, lượng vitamin C cao tốt cho hệ miễn dịch và cơ thể, giúp phòng ngừa ung thư một cách hiệu quả. Nước ép táo có rất nhiều lợi ích. Táo là loại trái cây tốt nhất cho sức khỏe và tiêu thụ nó dưới dạng nước ép thậm chí còn tốt hơn. Nước ép táo có thể giải độc và làm sạch cơ thể. Ngoài ra nước táo Vfresh còn có tác dụng hỗ trợ điều trị bệnh thiếu máu, giảm viêm khớp và yếu cơ. Đặc biệt, nước táo ép rất tốt cho hệ tiêu hóa và hàm lượng axit malic thấp, phân tán dễ dàng trong cơ thể nên còn giúp giữ gìn vóc dáng một cách hiệu quả. Sản phẩm được sản xuất từ trái cây nguyên chất, không phẩm màu, không chứa chất bảo quản, đạt tiêu chuẩn an toàn vệ sinh thực phẩm, an toàn tuyệt đối cho người tiêu dùng.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Nước ép đào Vfresh 1 lít',
                'price' => '40000',
                'image' => 'nuoc-dao-vfresh.jpg',
                'catalog_id' => '3',
                'description' => 'Sản phẩm nước ép trái cây chất lượng thơm ngon từ thương hiệu Vfresh được làm từ nguyên liệu tự nhiên tươi ngon và đào tươi nguyên chất giữ nguyên được hương vị tự nhiên, thơm ngon vốn có. Sản phẩm giúp giải khát nhanh chóng, cung cấp chất dinh dưỡng, tốt cho sức khỏe. Thành phần Nước, nước đào ép từ nước đào cô đặc (42%), đường tinh luyện, chất ổn định (440), hương liệu tổng hợp dùng cho thực phẩm,... Nước đào Vfresh làm từ nguyên liệu tự nhiên tươi ngon và đào tươi nguyên chất 100% (chứa đến 42% đào ép) nên giữ nguyên được hương vị tự nhiên, thơm ngon vốn có. Cung cấp chất dinh dưỡng, tốt cho sức khỏe. Sản phẩm chứa đuờng glucoza, đường saccaro, protein, caroten, vitamin B1, B2, C, PP và các chất sắt. Giúp bổ sung dưỡng chất cho vóc dáng và sức khoẻ cho cơ thể để bạn luôn khoẻ khoắn và tươi tắn năng động. Nước ép đào có chứa beta-carotene giúp cải thiện thị lực và ngăn ngừa oxy hóa võng mạc, cải thiện lưu thông máu trong mắt, làm giãn cơ mắt và các cơ xung quang mắt giúp hạn chế tối đa tình trạng mỏi mắt. Ngoài những lợi ích trên, chất chống oxy hoá và vitamin C cũng được tìm thấy trong đào nguyên trái và nước ép có thể giúp bạn giảm cân, chống sưng viêm và cải thiện sắc tố da, làm da mềm mịn và sáng hơn.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Nước ép dứa nguyên chất 100% Rauch 1 lít',
                'price' => '86000',
                'image' => 'nuoc-ep-dua.jpg',
                'catalog_id' => '3',
                'description' => 'Nước ép dứa nguyên chất 100% Rauch 1 lít với hương vị thơm ngon hấp dẫn, vị thanh ngọt, tươi mát của dứa tươi nguyên chất 100% giàu vitamin và dinh dưỡng cho cơ thể nguồn năng lượng sảng khoái. Sản phẩm nước ép chất lượng nhà Rauch nhập khẩu từ châu Âu cam kết an toàn và vệ sinh. Thành phần 100% nước ép dứa cô đặc. Hướng dẫn sử dụng Dùng trực tiếp không qua xử lý nhiệt.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Nước ép đào Rauch 1 lít',
                'price' => '78000',
                'image' => 'nuoc-ep-dao-rauch.jpg',
                'catalog_id' => '3',
                'description' => 'Nước ép đào Rauch 1 lít thơm ngon bổ dưỡng, giàu vitamin tốt cho sức khỏe với vị đào chua ngọt thanh mát, dễ chịu. Sản phẩm nước ép chất lượng nhà Rauch nhập khẩu từ Áo, cam kết chính hãng và bảo đảm vệ sinh an toàn. Đóng hộp kín đáo, có nắp đậy, dễ dàng sử dụng và bảo quản. Thành phần 50% đào xay nhuyễn, nước, đường, chất điều chỉnh độ acid. Bảo quản Bảo quản ở nhiệt độ thường. Giữ lạnh sau khi mở nắp, sử dụng trong vòng 3 ngày.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Nước ép chanh dây Rauch 1 lít',
                'price' => '75000',
                'image' => 'nuoc-ep-chanh-day.jpg',
                'catalog_id' => '3',
                'description' => 'Nước ép chanh dây Rauch 1 lít cực thơm ngon bổ dưỡng, bổ sung vitamin C tăng cường đề kháng tốt cho sức khỏe với vị chua chua thanh mát sảng khoái. Sản phẩm nước ép chất lượng nhà Rauch nhập khẩu từ Áo, cam kết chính hãng và vệ sinh an toàn. Đóng hộp kín đáo, có nắp đậy, dễ dàng sử dụng và bảo quản. Thành phần Nước, 25% nước ép chanh dây cô đặc, đường, chất ổn định. Bảo quản Bảo quản ở nhiệt độ thường. Giữ lạnh sau khi mở nắp, sử dụng trong vòng 3 ngày.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Nước ép dâu tây Rauch 1 lít',
                'price' => '75000',
                'image' => 'nuoc-ep-dau-tay-rauch.jpg',
                'catalog_id' => '3',
                'description' => 'Nước ép dâu tây Rauch 1 lít hương vị thơm ngon bổ dưỡng, với vị dâu chua ngọt thanh mát giúp bổ sung vitamin, tăng cường đề kháng cho cơ thể khỏe mạnh. Sản phẩm nước ép chất lượng nhà Rauch nhập khẩu từ Áo, cam kết chính hãng và vệ sinh an toàn. Thành phần Nước, 27% nước ép dâu tây từ dâu tây xay nhuyễn và dâu tây cô đặc, 23% nước ép táo từ táo cô đặc và táo xay nhuyễn cô đặc, đường, nước cốt chanh cô đặc, nước ép quả lý chua đen cô đặc, nước ép cà rốt đen cô đặc, chất điều chỉnh độ acid. Bảo quản Bảo quản ở nhiệt độ thường. Giữ lạnh sau khi mở nắp, sử dụng trong vòng 3 ngày.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Nước ép cam nguyên chất 100% Rauch 1 lít',
                'price' => '73000',
                'image' => 'nuoc-ep-cam-nguyen-chat-100-rauch.jpg',
                'catalog_id' => '3',
                'description' => 'Nước ép cam nguyên chất 100% Rauch 1 lít thơm ngon bổ dưỡng, giàu vitamin tốt cho sức khỏe với vị chua thanh mát sảng khoái cung cấp năng lượng cho ngày dài. Sản phẩm nước ép chất lượng nhà Rauch nhập khẩu từ Áo, cam kết chính hãng và bảo đảm vệ sinh an toàn. Thành phần 100% nước ép cam cô đặc. Bảo quản Bảo quản ở nhiệt độ thường. Giữ lạnh sau khi mở nắp, sử dụng trong vòng 3 ngày.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Nước ép anh đào Rauch 1 lít',
                'price' => '71000',
                'image' => 'nuoc-ep-anh-dao-rauch.jpg',
                'catalog_id' => '3',
                'description' => 'Nước ép anh đào Rauch 1 lít thơm ngon bổ dưỡng, giàu vitamin tốt cho sức khỏe. Sản phẩm nước ép chất lượng nhà Rauch nhập khẩu từ Áo, cam kết chính hãng và bảo đảm vệ sinh an toàn. Đóng hộp kín đáo, có nắp đậy, dễ dàng sử dụng và bảo quản. Thành phần 50% nước ép anh đào chua, nước, đường, chất điều chỉnh độ acid. Hướng dẫn sử dụng Dùng trực tiếp không qua xử lý nhiệt. Bảo quản Bảo quản ở nhiệt độ thường. Giữ lạnh sau khi mở nắp, sử dụng trong vòng 3 ngày.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Nước ép táo nguyên chất 100% Rauch 1 lít',
                'price' => '64000',
                'image' => 'nuoc-ep-tao-nguyen-chat-100-rauch.jpg',
                'catalog_id' => '3',
                'description' => 'Nước ép táo nguyên chất 100% Rauch 1 lít thơm ngon bổ dưỡng, giàu vitamin tốt cho sức khỏe. Sản phẩm nước ép nhà Rauch chất lượng nhập khẩu từ Áo, cam kết chính hãng và bảo đảm vệ sinh an toàn. Đóng hộp kín đáo, có nắp đậy, dễ dàng sử dụng và bảo quản. Thành phần 100% nước ép táo cô đặc. Hướng dẫn sử dụng Dùng trực tiếp không qua xử lý nhiệt. Bảo quản Để nơi khô ráo và thoáng mát, tránh ánh nắng trực tiếp hoặc nơi có nhiệt độ cao. Sau khi mở nắp, bảo quản ở ngăn lạnh và sử dụng trong vòng 3 ngày.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Nước ép berry & trái cây 100% Malee 1 lít',
                'price' => '59000',
                'image' => 'nuoc-ep-berry-trai-cay-100-malee.jpg',
                'catalog_id' => '3',
                'description' => 'Sản phẩm chất lượng từ thương hiệu Malee với thành phần là 100% trái cây tự nhiên. Nước ép berry & trái cây 100% Malee 1 lít thơm ngon bổ dưỡng chứa nhiều vitamin giúp giải khát nhanh chóng, đồng thời cung cấp năng lượng cho cơ thể khỏe mạnh và mang lại nhiều lợi ích cho sắc đẹp đặc biệt là làn da. Nước ép trái cây là một trong những loại đồ uống được mọi người tin dùng bởi những lợi ích tuyệt vời cho sức khỏe mà nó mang lại. Không chỉ vậy, loại nước uống này còn bổ sung nhiều dưỡng chất thiết yếu để nuôi dưỡng và chăm sóc làn da từ sâu bên trong, là một phương pháp làm đẹp tự nhiên, an toàn và hiệu quả. Nước ép trái cây còn giúp cơ thể thải hết độc tố ra bên ngoài, hỗ trợ tiêu hóa, tăng cường hệ thống miễn dịch, ngăn ngừa dị ứng và các bệnh cảm cúm thông thường. Ngoài ra, loại đồ uống này còn được phái đẹp ưa chuộng bởi khả năng giảm cân nhanh chóng nhưng không gây mất sức hay ảnh hưởng đến sức khỏe.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Nước ép kiwi táo Vinamilk Fruit Love 1 lít',
                'price' => '60000',
                'image' => 'nuoc-ep-kiwi-tao-vinamilk.jpg',
                'catalog_id' => '3',
                'description' => 'Đây là loại nước trái cây của thương hiệu Vinamilk an toàn và đảm bảo sức khỏe. Nước trái cây Fruit Love Vinamilk hương kiwi táo với dưỡng chất tinh túy từ thiên nhiên và giữ trọn vị ngọt tự nhiên giàu chất dinh dưỡng cho cơ thể khỏe mạnh và tràn đầy năng lượng. Thành phần Nước ép táo kiwi (99%) (nước, nước táo ép cô đặc (11.3%), nước kiwi ép cô đặc (8.3%)), hương liệu giống tự nhiên dùng cho thực phẩm. Hướng dẫn sử dụng Lắc đều trước khi sử dụng. Ngon hơn khi uống lạnh. Bảo quản Bảo quản nơi khô ráo, thoáng mát. Sau khi sử dụng, đậy kín và bảo quản trong tủ lạnh (6-8 độ C) và dùng hết trong vóng 3 ngày.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Nước ép đào & trái cây Malee 1 lít',
                'price' => '60000',
                'image' => 'nuoc-ep-dao-va-trai-cay.jpg',
                'catalog_id' => '3',
                'description' => 'Nước ép chất lượng từ thương hiệu Malee sản xuất tại Thái Lan. Nước ép đào & trái cây Malee 1 lít từ quả đào và trái cây chín mọng, tươi ngon chứa nhiều vitamin và dinh dưỡng giúp giải nhanh cơn khát, cung cấp năng lượng cho cơ thể khỏe sảng khoái và mang lại nhiều lợi ích cho làn da. Thành phần 55% nước ép đào, 30% nước ép nho, 15 % nước ép táo. Hướng dẫn sử dụng Lắc đều trước khi sử dụng. Ngon hơn khi uống lạnh. Bảo quản Để nơi khô ráo và thoáng mát, tránh ánh nắng trực tiếp hoặc nơi có nhiệt độ cao. Sau khi mở nắp, bảo quản ở ngăn lạnh và sử dụng trong vòng 3 ngày.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Nước ép cherry Malee 1 lít',
                'price' => '60000',
                'image' => 'nuoc-ep-cherry-malee.jpg',
                'catalog_id' => '3',
                'description' => 'Sản phẩm nước ép chất lượng từ thương hiệu Malee được sản xuất tại Thái Lan. Nước ép Cherry Malee hộp 1 lít từ nguồn cherry và nhiều loại trái cây tươi ngon chứa nhiều vitamin và dưỡng chất giúp giải khát nhanh chóng, đồng thời cung cấp năng lượng cho cơ thể sảng khoái. Cam kết an toàn và chất lượng. Thành phần Nước ép cherry và trái cây hỗn hợp. Hướng dẫn sử dụng Lắc đều trước khi sử dụng. Ngon hơn khi uống lạnh. Bảo quản Để nơi khô ráo và thoáng mát, tránh ánh nắng trực tiếp hoặc nơi có nhiệt độ cao. Sau khi mở nắp, bảo quản ở ngăn lạnh và sử dụng trong vòng 3 ngày. Nước ép Malee cherry có thành phần từ nước ép cherry nguyên chất kết hợp các loại nước ép trái cây khác cùng với hoa cherry cung cấp nhiều vitamin và dưỡng chất cho cơ thể. Cherry chứa nhiều vitamin A và beta-carotene giúp bảo vệ mắt sáng khoẻ. Nước ép cherry giúp hỗ trợ giảm cân hiệu quả, đẹp da, đẹp dáng, tốt cho người bị cao huyết áp, góp phần làm giảm lượng cholesterol xấu trong máu. Trong cherry có chứa chất chống ôxy hóa anthocyanin tốt cho não bộ, tăng cường trí nhớ. Chất melatonin trong cherry còn hỗ trợ cải thiện tình trạng mất ngủ. Chất chống oxy hoá có trong nước ép giúp phòng ngừa bệnh ung thư, bệnh tim và hỗ trợ kháng viêm rất tốt. Bên cạnh đó chất này còn có khả năng bảo vệ tế bào làm chậm quá trình lão hóa và ngăn ngừa các bệnh mãn tính như bệnh tim, ung thư, bệnh Alzheimer, tiểu đường và béo phì. ',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Nước ép trái vải Malee 1 lí',
                'price' => '60000',
                'image' => 'nuoc-ep-trai-vai-malee.jpg',
                'catalog_id' => '3',
                'description' => 'Được sản xuất tại Thái Lan, có vị vải ngọt thanh mát và hương thơm đặc trưng tự nhiên là hương vị yêu thích của nhiều người. Sản phẩm được sản xuất trong dây truyền khép kín với tiêu chuẩn chất lượng cao chứa nhiều vitamin C và các thành phần tốt cho sức khỏe và sắc đẹp. Nước ép trái vải Malee được nhiều người yêu thích bởi vị ngọt thanh mát và hương thơm đặc trưng tự nhiên. Sản phẩm được sản xuất trong dây truyền khép kín với tiêu chuẩn chất lượng cao chứa nhiều vitamin C và các thành phần chống oxy hóa tốt cho làn da, hạn chế nếp nhăn và chống lão hóa da hiệu quả. Nước ép vải chứa nhiều kali nhưng lại ít natri, hỗ trợ điều trị chứng cao huyết áp, co thắt mạch máu, giảm nguy cơ đột quỵ và tai biến. Ngoài ra, uống nước ép vải hằng ngày còn làm tăng lượng cholesterol tốt và giảm cholesterol xấu thúc đẩy cơ thể sản sinh hồng cầu, cải thiện quá trình lưu thông máu. Chất xơ hòa tan, pectin có trong nước ép vải hỗ trợ rất tốt cho hệ tiêu hóa. Không những thế nhờ giàu hợp chất flavonoid, sản phẩm còn có tác dụng kháng viêm và làm giảm đau viêm khớp.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Nước ép lựu & trái cây Malee 1 lít',
                'price' => '60000',
                'image' => 'nuoc-ep-luu-malee.jpg',
                'catalog_id' => '3',
                'description' => 'Nước ép chất lượng từ thương hiệu Malee sản xuất tại Thái Lan. Nước ép Cherry Malee hộp 1 lít từ những trái lựu chín mọng, kết hợp cùng các loại nước ép trái cây khác được xem là thần dược của làn da cung cấp nhiều dưỡng chất cho cơ thể, làm đẹp da và chống lão hóa hiệu quả. Nước ép lựu Malee được ép từ những trái lựu chín mọng, kết hợp cùng các loại nước ép trái cây khác được xem là thần dược của làn da khi cung cấp nhiều dưỡng chất cho cơ thể, làm đẹp da và chống lão hóa hiệu quả. Nước lựu có nguồn gốc từ thực vật nhưng có chứa tới 100 loại khoáng chất giúp cơ thể bổ sung năng lượng, cung cấp nước, cung cấp vitamin có lợi cho cơ thể và nhiều nhất là vitamin C, giúp giảm cảm giác mệt mỏi cho bạn cơ thể khỏe mạnh. Nước ép có màu đỏ như lựu có khả năng giảm nguy cơ mắc các bệnh mãn tính và các bệnh viêm nhiễm. Uống nước ép lựu cũng là một lựa chọn tuyệt vời để có được hàm lượng chất dinh dưỡng tối ưu, đồng thời làm tăng lượng ô-xy hóa có sẵn trong cơ thể. ',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Nước ép lựu & táo Vinamilk Fruit Love 1 lít',
                'price' => '60000',
                'image' => 'nuoc-ep-luu-tao.jpg',
                'catalog_id' => '3',
                'description' => 'Nước ép lựu & táo Vinamilk Fruit Love 1 lít. Thành phần Nước ép táo lựu (99.7%) (nước, nước ép táo cô đặc (10.2%), nước lựu ép cô đặc (7.6%)), chiết xuất cà rốt tím, hương liệu giống tự nhiên dùng cho thực phẩm. Hướng dẫn sử dụng Lắc đều trước khi sử dụng. Ngon hơn khi uống lạnh. Bảo quản Bảo quản nơi khô ráo, thoáng mát. Sau khi sử dụng, đậy kín và bảo quản trong tủ lạnh (6-8 độ C) và dùng hết trong vóng 3 ngày.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Nước ép nho Malee 1 lít',
                'price' => '56000',
                'image' => 'nuoc-ep-nho-malee.jpg',
                'catalog_id' => '3',
                'description' => 'Với thành phần tự nhiên từ trái nho 100% cung cấp nhiều vitamin và dưỡng chất thiết yếu cho cơ thể giúp bù đắp nước, bổ sung năng lượng, cho bạn cơ thể luôn khỏe mạnh và tràn đầy sức sống. Nước ép nho Malee hộp 1 lít thơm ngon bổ dưỡng cho cả giả đình. Sản phẩm chất lượng và ant toàn. Nước ép nho Malee có thành phần tự nhiên từ trái nho 100% cung cấp nhiều vitamin và dưỡng chất thiết yếu cho cơ thể giúp bù đắp nước, bổ sung năng lượng, cho bạn cơ thể luôn khỏe mạnh và tràn đầy sức sống. Nước ép nho chứa rất nhiều vitamin như A, C, E và các chất khoáng như: kali, magie, phốt pho...chống lão hóa hiệu quả, cân bằng giữa vi khuẩn tốt và vi khuẩn có hại trong ruột, giúp cho hệ tiêu hóa vận hành được thuận lợi hơn. Nước ép nho chứa nhiều cholesterol tốt, có khả năng ngăn ngừa được chứng xơ vữa, tắc nghẽn động mạch và cải thiện sức khỏe hệ tim mạch hiệu quả. Một nghiên cứu cho thấy flavonoid có trong nho giúp giảm nguy cơ bị đau tim đặc biệt ở những bệnh nhân mắc bệnh mạch vành. Nước ép Malee được sản xuất trên dây chuyền hiện đại của Thái Lan, không chứa chất bảo quản an toàn cho người sử dụng. Người dùng có thể mang theo dễ dàng khi đi học, đi làm hay trong những chuyến đi chơi, picnic.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Nước ép quýt Malee 1 lít',
                'price' => '56000',
                'image' => 'nuoc-ep-quyt.jpg',
                'catalog_id' => '3',
                'description' => 'Sản phẩm nước ép trái cây chất lượng từ thương hiệu Malee được sản xuất tại Thái Lan. Nước ép quýt Malee hộp 1 lít từ trái quýt chín mọng tươi ngon chứa nhiều vitamin và dưỡng chất giúp giải khát nhanh chóng, đồng thời cung cấp năng lượng cho cơ thể sản khoái. Cam kết an toàn và chất lượng. Nước ép quýt Malee có thành phần là 100% trái quýt chín mọng, mang đến hương vị tự nhiên, sảng khoái và tràn đầy năng lượng, phù hợp với nhu cầu bổ sung nguồn dưỡng chất dồi dào trong các hoạt động hằng ngày. Sản phẩm được sản xuất trên quy trình công nghệ hiện đại, được kiểm duyệt chặt chẽ, đảm bảo chất lượng và an toàn cho người sử dụng. Nước ép quýt giàu Vitamin C, là một trong những chất chống oxy hóa mạnh mẽ, đóng nhiều vai trò quan trọng như tổng hợp collagen, làm lành vết thương, phòng chống virut, ung thư và ngăn ngừa các bệnh thoái hóa thần kinh bằng cách loại bỏ các tế bào gốc tự do ra khỏi cơ thể. Ngoài ra sản phẩm chứa nhiều chất xơ hòa tan và không hòa tan như hemi-cellucose, pectin sẽ ngăn cản lượng hấp thụ cholesterol trong ruột giúp nhuận tràng và hỗ trợ tiêu hóa, cho hệ đường ruột của bạn luôn khỏe mạnh. Nước ép quýt Malee có vị ngọt dịu, thanh mát hòa quyện cùng hương vị chua vừa phải rất dễ uống dinh dưỡng giúp cơ thể bù đắp nước và xua tan cơn khát hiệu quả.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Nước ép táo Malee 1 lít',
                'price' => '56000',
                'image' => 'nuoc-ep-malee-tao.jpg',
                'catalog_id' => '3',
                'description' => 'Nước ép chất lượng từ thương hiệu Malee sản xuất tại Thái Lan. Nước ép táo Malee 1 lít từ quả táo tươi ngon, chín mọng chứa nhiều vitamin và dinh dưỡng giúp giải nhanh cơn khát, cung cấp năng lượng cho cơ thể khỏe khoắn sảng khoái và mang lại nhiều lợi ích cho làn da. Nước ép táo Malee với mùi vị thơm ngon giúp cơ thể bổ sung năng lượng, nhiều vitamin có lợi nhất là vitamin C. Thích hợp làm thức uống bổ dưỡng hàng ngày, cho bạn cơ thể khỏe mạnh và làn da tràn đầy sức sống. Nước ép táo Malee với thành phần 100% từ nước táo ép, được lựa chọn kỹ lưỡng, không chứa hóa chất độc hại, an toàn cho người dùng. Sản phẩm được sản xuất trên quy trình công nghệ hiện đại, được kiểm duyệt chặt chẽ, đảm bảo chất lượng và được ưa chuộng trên thị trường. Nước táo có thành phần chứa nhiều chất chống ô xy hóa, vitamin C, hàng loạt dưỡng chất quan trọng, nên táo giúp giảm thiểu nếp nhăn, xóa dấu hiệu tuổi tác trên làn da. Nhờ các chất chống oxy hóa, vitamin C có trong táo giúp tăng sinh Collagen cho cơ thể giữ vai trò quan trọng trong việc trẻ hóa làn da. Không chỉ tốt cho da mà nước ép táo còn giúp bạn loại bỏ gàu, giúp bạn có một mái tóc suôn mượt, chắc khỏe. Ngoài ra nước ép táo là một phương pháp giảm cân cực kì an toàn. Bởi nó còn cung cấp cho cơ thể nhiều chất dinh dưỡng khác giúp cơ thể khỏe mạnh và tràn đầy năng lượng.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Nước ép dứa Malee 1 lít',
                'price' => '56000',
                'image' => 'nuoc-ep-dua-malee.jpg',
                'catalog_id' => '3',
                'description' => 'Nước ép chất lượng từ thương hiệu Malee sản xuất tại Thái Lan. Nước ép dứa Malee 1 lít từ quả dứa tươi ngon chứa nhiều vitamin, chất xơ và dinh dưỡng giúp giải nhanh cơn khát, cung cấp năng lượng cho cơ thể khỏe khoắn sảng khoái và mang lại nhiều lợi ích cho làn da.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Nước ép cam Juss 1 lít',
                'price' => '44000',
                'image' => 'nuoc-ep-cam-juss.jpg',
                'catalog_id' => '3',
                'description' => 'Sản phẩm nước ép trái cây chất lượng thơm ngon của thương hiệu Juss đến từ Thổ Nhĩ Kỳ. Nước ép cam Juss 1 lít từ quả cam tươi ngon, mọng nước chứa nhiều vitamin và dinh dưỡng giúp giải khát nhanh chóng, cung cấp năng lượng, có lợi cho sức khỏe đồng thời mang lại hiệu quả làm đẹp da rất tốt. Thành phần 100% từ nước ép cam, chất điều chỉnh độ acid, hương liệu cam tự nhiên. Hướng dẫn sử dụng Lắc đều trước khi sử dụng. Ngon hơn khi uống lạnh. Bảo quản lạnh sau khi mở bao bì và sử dụng trong vòng 2 ngày. Sử dụng tốt nhất trước ngày hết hạn được ghi trên phần đầu của hộp. Bảo quản Bảo quản nơi khô ráo, sạch, thoáng mát, tránh ánh nắng trực tiếp.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Chuối sấy dẻo Frusa gói 100g',
                'price' => '18000',
                'image' => 'chuoi-say-deo-frusa.jpg',
                'catalog_id' => '4',
                'description' => 'Chuối sấy tươi ngọt được sấy dẻo, dai và vẫn giữ được độ ngọt của nó. Chuối sấy dẻo Frusa gói 100g thơm ngon, hấp dẫn thích hợp để thưởng trà và ăn vặt xem phim, đọc sách. Trái cây sấy Frusa chất lượng, vệ sinh và tiện lợi được nhiều người chọn mua. Dạng sấy Sấy dẻo - sử dụng nhiệt độ cao (50 - 70 độ C) để làm mất đi một phần hơi nước của sản phẩm rồi đem đi làm mát. Thành phần Chuối (93%), đường, chất điều chỉnh độ acid, chất bảo quản, chất chống oxy hóa. Bảo quản Bảo quản nơi khô ráo, thoáng mát. Đậy kín bao bì sau khi sử dụng.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Đu đủ sấy dẻo Frusa gói 35g',
                'price' => '9000',
                'image' => 'du-du-say-deo.jpg',
                'catalog_id' => '4',
                'description' => 'Đu đủ sấy tươi ngọt được sấy dẻo, dai và vẫn giữ được độ ngọt của nó. Đu đủ sấy dẻo Frusa gói 35g thơm ngon, hấp dẫn thích hợp để thưởng trà và ăn vặt xem phim, đọc sách. Trái cây sấy Frusa chất lượng, vệ sinh và tiện lợi được nhiều người chọn mua. Dạng sấy Sấy dẻo - sử dụng nhiệt độ cao (50 - 70 độ C) để làm mất đi một phần hơi nước của sản phẩm rồi đem đi làm mát. Thành phần Đu đủ (94%), đường, hương chanh dây giống tự nhiên, chất điều chỉnh độ acid, chất chống oxy hóa, chất bảo quản. Bảo quản Bảo quản nơi khô ráo, thoáng mát. Đậy kín bao bì sau khi sử dụng.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Thơm sấy dẻo muối ớt Frusa gói 100g',
                'price' => '35000',
                'image' => 'thom-say-deo-muoi-ot.jpg',
                'catalog_id' => '4',
                'description' => 'Thơm sấy tươi ngọt được sấy dẻo, dai và vẫn giữ được độ ngọt của nó. Thơm sấy dẻo muối ớt Frusa gói 100g thơm ngon, hấp dẫn thích hợp để thưởng trà và ăn vặt xem phim, đọc sách. Trái cây sấy Frusa chất lượng, vệ sinh và tiện lợi được nhiều người chọn mua. Dạng sấy Sấy dẻo - sử dụng nhiệt độ cao (50 - 70 độ C) để làm mất đi một phần hơi nước của sản phẩm rồi đem đi làm mát. Thành phần Thơm (94%), đường, muối, chất điều chỉnh độ acid, chất bảo quản, chất chống xy hóa. Bảo quản Bảo quản nơi khô ráo, thoáng mát. Đậy kín bao bì sau khi sử dụng.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Cam Thái sấy Thaifruitz gói 100g',
                'price' => '53000',
                'image' => 'cam-thai-say.jpg',
                'catalog_id' => '4',
                'description' => 'Cam Thái sấy dẻo, thơm thơm, ngọt ăn dai dai rất vui miệng. Cam Thái sấy Thaifruitz gói 100g sấy dẻo bằng cách sử dụng nhiệt độ cao (50 - 70 độ C) để làm mất đi một phần hơi nước của sản phẩm rồi đem đi làm mát. Trái cây sấy Thaifruitz chất lượng, vệ sinh và hấp dẫn. Dạng sấy Sấy dẻo - sử dụng nhiệt độ cao (50 - 70 độ C) để làm mất đi một phần hơi nước của sản phẩm rồi đem đi làm mát. Thành phần Cam tươi 88%, đường 12%. Cam là một loại trái cây nhiệt đới rất tốt cho sức khỏe và đã được nghiên cứu có nhiều công dụng trong việc tăng cường sức đề kháng và làm lành vết thương. Các sản phẩm từ cam đã và đang được sử dụng ở rất nhiều hình thức khác nhau từ sử dụng tươi, làm mứt, nước ép… Đặc biệt trong đó có thể kể đến các loại trái cây sấy thơm ngon và giữ được dinh dưỡng, có thể kể đến thương hiệu trái cây sấy Thaifruitz sẽ mang đến cho khách hàng một trải nghiệm khác biệt của cam đó là sản phẩm Cam Thái sấy Thaifruitz gói 100g. Đây sẽ là sản phẩm bạn cần phải lưu tâm vào danh mục thực phẩm tiêu dùng thông minh của mình.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Xoài Thái sấy dẻo Thaifruitz gói 100g',
                'price' => '53000',
                'image' => 'xoai-thai-say-deo-thaifruitz.jpg',
                'catalog_id' => '4',
                'description' => 'Xoài Thái sấy dẻo, thơm thơm, ngọt ăn dai dai rất vui miệng. Xoài Thái sấy dẻo Thaifruitz gói 100g sấy dẻo bằng cách sử dụng nhiệt độ cao (50 - 70 độ C) để làm mất đi một phần hơi nước của sản phẩm rồi đem đi làm mát. Trái cây sấy Thaifruitz chất lượng, vệ sinh và hấp dẫn. Dạng sấy Sấy dẻo - sử dụng nhiệt độ cao (50 - 70 độ C) để làm mất đi một phần hơi nước của sản phẩm rồi đem đi làm mát. Thành phần Xoài tươi 95%, đường. Bảo quản Nơi khô ráo, thoáng mát, tránh ánh nắng.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Xoài sấy muối ớt Thaifruitz gói 100g',
                'price' => '52000',
                'image' => 'xoai-say-muoi-ot-thaifruitz.jpg',
                'catalog_id' => '4',
                'description' => 'Xoài sấy dẻo muối ớt, thơm thơm, ngọt ăn dai dai rất vui miệng. Xoài sấy muối ớt Thaifruitz gói 100g sấy dẻo bằng cách sử dụng nhiệt độ cao (50 - 70 độ C) để làm mất đi một phần hơi nước của sản phẩm rồi đem đi làm mát. Trái cây sấy Thaifruitz chất lượng, vệ sinh và hấp dẫn. Dạng sấy Sấy dẻo - sử dụng nhiệt độ cao (50 - 70 độ C) để làm mất đi một phần hơi nước của sản phẩm rồi đem đi làm mát. Thành phần Xoài tươi 95%, đường, muối ớt. Bảo quản Nơi khô ráo, thoáng mát, tránh ánh nắng.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Kiwi sấy dẻo Thaifruitz gói 100g',
                'price' => '52000',
                'image' => 'kiwi-say-deo-thaifruitz.jpg',
                'catalog_id' => '4',
                'description' => 'Kiwi sấy dẻo, thơm thơm, ngọt ăn dai dai rất vui miệng. Kiwi sấy dẻo Thaifruitz gói 100g sấy dẻo bằng cách sử dụng nhiệt độ cao (50 - 70 độ C) để làm mất đi một phần hơi nước của sản phẩm rồi đem đi làm mát. Trái cây sấy Thaifruitz chất lượng, vệ sinh và hấp dẫn. Dạng sấy Sấy dẻo - sử dụng nhiệt độ cao (50 - 70 độ C) để làm mất đi một phần hơi nước của sản phẩm rồi đem đi làm mát. Đặc tính Dẻo, mềm, hơi dai. Thành phần Kiwi tươi 95%, đường. Bảo quản Nơi khô ráo, thoáng mát, tránh ánh nắng.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Thơm sấy dẻo Thaifruitz gói 100g',
                'price' => '49000',
                'image' => 'thom-say-deo-thaifruitz.jpg',
                'catalog_id' => '4',
                'description' => 'Thơm sấy dẻo, thơm thơm, ngọt ăn dai dai rất vui miệng. Thơm sấy dẻo Thaifruitz gói 100g sấy dẻo bằng cách sử dụng nhiệt độ cao (50 - 70 độ C) để làm mất đi một phần hơi nước của sản phẩm rồi đem đi làm mát. Trái cây sấy Thaifruitz chất lượng, vệ sinh và hấp dẫn. Dạng sấy Sấy dẻo - sử dụng nhiệt độ cao (50 - 70 độ C) để làm mất đi một phần hơi nước của sản phẩm rồi đem đi làm mát. Đặc tính Dẻo, mềm, hơi dai. Thành phần Thơm tươi 95%, đường. Bảo quản Nơi khô ráo, thoáng mát, tránh ánh nắng.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Dừa sấy giòn Thaifruitz gói 80g',
                'price' => '52000',
                'image' => 'dua-say-gion.jpg',
                'catalog_id' => '4',
                'description' => 'Dừa sấy giòn, thơm thơm, ngọt ăn dai dai rất vui miệng. Dừa sấy giòn Thaifruitz gói 80g sử dụng nhiệt độ cao làm bốc hơi lượng nước có trong sản phẩm. Trái cây sấy Thaifruitz chất lượng, vệ sinh và hấp dẫn được nhiều người chọn mua. Dạng sấy Sấy giòn - sử dụng nhiệt độ cao làm bốc hơi lượng nước có trong sản phẩm. Đặc tính Đạt độ giòn xốp cao mà vẫn giữ được hương vị tự nhiên, thơm ngon. Thành phần Cơm dừa tươi 90%, đường tinh luyện 10%. Bảo quản Nơi khô ráo, thoáng mát, tránh ánh nắng.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Vỏ bưởi chanh dây sấy dẻo Nong Lam Food hộp 100g',
                'price' => '65000',
                'image' => 'vo-buoi-chanh.jpg',
                'catalog_id' => '4',
                'description' => 'Vỏ bưởi chanh dây sấy dẻo, mềm, dai dai, thơm ngon ăn là ghiền. Vỏ bưởi chanh dây sấy dẻo Nong Lam Food hộp 100g được sấy dẻo, thích hợp để ăn vặt và xem phim rất thích hợp. Trái cây sấy Nong Lam Food chất lượng, an toàn vệ sinh và được nhiều người tin dùng. Dạng sấy Sấy dẻo - sử dụng nhiệt độ cao (50 - 70 độ C) để làm mất đi một phần hơi nước của sản phẩm rồi đem đi làm mát. Đặc tính Dẻo, mềm, hơi dai. Thành phần Vỏ bưởi (87.7%), nước cốt chanh dây (11.1%), đường kính trắng, glucose, chất điều chỉnh độ acid (E330). Bảo quản Dùng ăn liền. Sau khi mở bao bì nên sử dụng hết trong vòng 10 ngày.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Cà chua bi sấy dẻo Nong Lam Food hộp 75g',
                'price' => '57000',
                'image' => 'ca-chua-bi.jpg',
                'catalog_id' => '4',
                'description' => 'Cà chua sấy dẻo, mềm, dai dai, thơm ngon ăn là ghiền. Cà chua bi sấy dẻo Nong Lam Food hộp 75g được sấy dẻo, thích hợp để ăn vặt và xem phim rất thích hợp. Trái cây sấy Nong Lam Food chất lượng, an toàn vệ sinh và được nhiều người tin dùng. Dạng sấy Sấy dẻo - sử dụng nhiệt độ cao (50 - 70 độ C) để làm mất đi một phần hơi nước của sản phẩm rồi đem đi làm mát. Đặc tính Dẻo, mềm, hơi dai. Thành phần Cà chua bi (94.5%), đường kính trắng, glucose, muối ăn. Bảo quản Dùng ăn liền. Sau khi mở bao bì nên sử dụng hết trong vòng 10 ngày.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Hạt chia Nutty gói 250g',
                'price' => '68000',
                'image' => 'hat-chia.jpg',
                'catalog_id' => '4',
                'description' => 'Với thành phần  100% hạt chia nhập khẩu từ Peru, chất lượng và dinh dưỡng. Hạt chia Nutty gói 250g tiện lợi, có thể sử dụng cho nhiều mục đích như nấu chè hoặc uống giúp thanh mát cơ thể. Hạt chia Nutty chất lượng, an toàn. Thành phần 100% hạt chia nhập khẩu từ Peru. Cách dùng Cho 10 - 15g hạt chia vào nước hoặc thức uống yêu thích, khuấy đều để tránh vón cục. Rắc lên salad, ngũ cốc hoặc sữa chua.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Yến mạch trái cây Sunrise vị phô mai bịch 300g',
                'price' => '95000',
                'image' => 'yen-mach-trai-cay.jpg',
                'catalog_id' => '4',
                'description' => 'Yến mạch trái cây được kết hợp với vị phô mai và trái cây sấy thơm ngon, hấp dẫn. Yến mạch trái cây Sunrise vị phô mai bịch 300g cung cấp cho bạn bữa ăn sáng hoặc bữa ăn phụ rất ngon miệng mà không sợ mập. Yến mạch Sunrise chất lượng, tiện lợi ăn kèm với sữa tươi và sữa chua sẽ ngon hơn. Thành phần Yến mạch, ngũ cốc sấy giòn (bột mì, bột gạo, bột phô mai, đường, dầu thực vật, sữa bột tách béo, bột bắp, muối, hương phô mai tổng hợp, chất chống vón đống, chất điều chỉnh độ acid, chống nhũ hóa), trái cây sấy (nho, dâu, biệt quất), mảnh bắp sấy giòn, hạt điều,hạt bí. Cách dùng Dùng ăn liền hoặc dùng chung yến mạch trái cây với sữa tươi hoặc sữa chua, có thể cho thêm trái cây tươi và hạt. Bảo quản Bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp của mặt trời. Sử dụng sản phẩm hết sau 10 ngày mở gói.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Hạt diêm mạch Nutty gói 250g',
                'price' => '61000',
                'image' => 'hat-diem-mach.jpg',
                'catalog_id' => '4',
                'description' => 'Với thành phần  100% hạt diêm mạch nhập khẩu từ Peru, chất lượng và dinh dưỡng. Hạt diêm mạch Nutty gói 250g tiện lợi, có thể sử dụng cho nhiều mục đích như nấu chè hoặc uống giúp thanh mát cơ thể. Hạt chia Nutty chất lượng, an toàn. Cách dùng Ngâm và rửa diêm mạch trước khi nấu. Có thể nấu bằng nồi cơm điện với tỉ lệ nước. Thành phần 100% hạt diêm mạch nhập khẩu từ Peru.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Yến mạch trái cây Sunrise Muesli bịch 300g',
                'price' => '75000',
                'image' => 'yen-mach-trai-cay-sunrise.jpg',
                'catalog_id' => '4',
                'description' => 'Yến mạch trái cây được kết hợp với yến mạch nướng và trái cây sấy thơm ngon, hấp dẫn. Yến mạch trái cây Sunrise Muesli bịch 300g cung cấp cho bạn bữa ăn sáng hoặc bữa ăn phụ rất ngon miệng mà không sợ mập. Yến mạch Sunrise chất lượng, tiện lợi ăn kèm với sữa tươi và sữa chua sẽ ngon hơn. Thành phần Yến mạch nướng (yến mạch, dầu thực vật, muối ăn, đường, chất chống vón đông, chất nhũ hóa), trái cây sấy (táo sấy, xoài sấy, nho khô, dâu sấy lạnh), dừa sấy. Cách dùng Dùng ăn liền hoặc dùng chung yến mạch trái cây với sữa tươi hoặc sữa chua, có thể cho thêm trái cây tươi và hạt. Bảo quản Bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp của mặt trời. Sử dụng sản phẩm hết sau 10 ngày mở gói.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Yến mạch trái cây Sunrise bịch 300g',
                'price' => '80000',
                'image' => 'yen-mach-trai-cay-sunrise-bich.jpg',
                'catalog_id' => '4',
                'description' => 'Yến mạch trái cây được kết hợp với các loại yến mạch và trái cây sấy thơm ngon, hấp dẫn. Yến mạch trái cây Sunrise bịch 300g cung cấp cho bạn bữa ăn sáng hoặc bữa ăn phụ rất ngon miệng mà không sợ mập. Yến mạch Sunrise chất lượng, tiện lợi ăn kèm với sữa tươi và sữa chua sẽ ngon hơn. Thành phần Yến mạch, ngũ cốc sấy giòn (yến mạch, gạo, đường, bắp, mạch nha, dầu thực vật, tinh bột bắp, bột dừa, muối, chất chống vón đông, trái cây sấy (nho, dâu, táo, đu đủ), hạt bí. Cách dùng Dùng ăn liền hoặc dùng chung yến mạch trái cây với sữa tươi hoặc sữa chua, có thể cho thêm trái cây tươi và hạt. Bảo quản Bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp của mặt trời. Sử dụng sản phẩm hết sau 10 ngày mở gói. Lưu ý Không dùng cho người dị ứng với các thành phần. Không sử dụng khi có dấu hiệu hư hỏng.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Ngũ cốc Bakalland Muesli 5 loại trái cây sấy và mật ong gói 300g',
                'price' => '89000',
                'image' => 'ngu-coc-bakalland.jpg',
                'catalog_id' => '4',
                'description' => 'Dinh dưỡng và tiện lợi. Ngũ cốc Bakalland Muesli 5 loại trái cây sấy và mật ong gói 300g với hương vị thơm ngon, kích thích vị giác. Ngũ cốc Bakalland thơm ngon vưới 5 loại hạt và mật ong cung cấp năng lượng cho một ngày làm việc hiệu quả. Thành phần Ngũ cốc 54% (ngũ cốc nguyên hạt 45%). Cách dùng Dùng trực tiếp hoặc dùng với sữa, sữa chua và các loại nước ép',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Yến mạch nguyên chất Navita Rolled Oats gói 450g',
                'price' => '78000',
                'image' => 'yen-mach.jpg',
                'catalog_id' => '4',
                'description' => 'Yến mạch rất tốt với sức khỏe con người, giúp giảm cân, ăn no, là trợ thủ cho những chị em muốn giữ vóc dáng. Yến mạch nguyên chất Navita Rolled Oats gói 450g của thương hiệu yến mạch Navita là sản phẩm được đóng gói tiêu chuẩn sản phẩm an toàn, thân thiện với mọi gia đình. Yến mạch rất tốt với sức khỏe con người, giúp giảm cân, ăn no, là trợ thủ cho những chị em muốn giữ vóc dáng. Yến mạch nguyên chất Navita Rolled Oats gói 450g của thương hiệu yến mạch Navita là sản phẩm được đóng gói tiêu chuẩn sản phẩm an toàn, thân thiện với mọi gia đình. Thành phần hoàn toàn từ yến mạch nguyên chất cán dẹt, nguồn nguyên liệu sạch, đạt tiêu chuẩn vệ sinh an toàn, là sự lựa chọn hoàn hảo cho người tiêu dùng. Chứa các thành phần giàu năng lượng, nhiều chất có lợi cho cơ thể, cụ thể như tinh bột, chất xơ, chất đạm, chất béo, vitamin và các hợp chất thực vật khác,...',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Hạt yến mạch cán mỏng Just Oats nguyên chất ăn liền gói 907g',
                'price' => '190000',
                'image' => 'hat-yen-mach-can-mong.jpg',
                'catalog_id' => '4',
                'description' => 'Hạt yến mạch Just Oats vô cùng dinh dưỡng và tiện lượi cho người dùng. Hạt yến mạch cán mỏng Just Oats nguyên chất ăn liền gói 907g có thể sử dụng trực tiếp hoặc chế biến thành nhiều món ăn ngon và bổ dưỡng. Yến mạch nhiều dưỡng chất, dinh dưỡng cho bạn an tâm sử dụng. Thành phần yến mạch 100%. Cách dùng Dùng ngay không cần chế biến lại, có thể chế biến thành những món ăn theo sở thích. Bảo quản Bảo quản nơi khô ráo, thoáng mát',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Ngũ cốc trái cây ít đường Calbee gói 600g',
                'price' => '264000',
                'image' => 'ngu-coc-trai-cay-it-duong.jpg',
                'catalog_id' => '4',
                'description' => 'Ngũ cốc là lựa chọn thơm ngon, giàu dưỡng chất được nhiều người yêu thích lựa chọn. Ngũ cốc trái cây ít đường Calbee gói 600g với đa dạng các loại trái cây hấp dẫn giúp ngũ cốc thêm phần ngon miệng hơn khi sử dụng. Đông thời, ngũ cốc Calbee không chứa nhiều đường, đảm bảo sức khoẻ khi dùng. Thành phần Trái cây sấy khô - Đu đủ, nho, táo, dâu tây, dừa. Yến mạch, lúa mạch đen, hạt giống lúa, ngô, hạt bí, hạnh nhân, lúa mì, gạo nâu, gạo lức. Vitamin A, vitamin B1, vitamin B3, vitamin B5, vitamin B6, vitamin B9, vitamin B12, vitamin D. Muối, glycerin, tinh bột biến đổi, sắt citrate Na, chất nhũ hóa (bao gồm cả sữa), đường, dầu thực vật, bột mì, dextrin, chất xơ hòa tan trong nước (dextrin khó tiêu), acidulant, chất chống oxy hóa (vitamin E, chiết xuất hương thảo), niacin, pantothenic axit Ca. Cách dùng Dùng trực tiếp hoặc dùng với sữa, sữa chua, kem và các loại nước ép. Có thể dùng cho trẻ trên 1 tuổi. Bảo quản Bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp mặt trời',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Ngũ cốc Bakalland Muesli 5 loại trái cây nhiệt đới và mật ong gói 300g',
                'price' => '88000',
                'image' => 'ngu-coc-bakalland-muesli.jpg',
                'catalog_id' => '4',
                'description' => 'Dinh dưỡng và tiện lợi. Ngũ cốc Bakalland Muesli 5 loại trái cây nhiệt đới và mật ong gói 300g với hương vị thơm ngon, kích thích vị giác. Ngũ cốc Bakalland thơm ngon vưới 5 loại hạt và mật ong cung cấp năng lượng cho một ngày làm việc hiệu quả. Thành phần Ngũ cốc 54% (ngũ cốc nguyên hạt 45% yến mạch, lúa mì; bột mì ngô, gạo, yến mạch), đường, chuối 10%, mật ong 7.2%, chà là 5%, dầu cọ, dứa 4%, đu đủ 3%, dừa 1.9%, chất nhũ hóa. Cách dùng Dùng trực tiếp hoặc dùng với sữa, sữa chua và các loại nước ép',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ],
            [
                'name' => 'Yến mạch nguyên chất Oatmeal Cereal gói 350g',
                'price' => '56000',
                'image' => 'yen-mach-nguyen-chat.jpg',
                'catalog_id' => '4',
                'description' => 'Thành phần: 100% từ yến mạch nguyên chất, nguồn nguyên liệu sạch, đạt tiêu chuẩn vệ sinh an toàn, là sự lựa chọn hoàn hảo cho người tiêu dùng. Yến mạch nguyên chất Oatmeal Cereal bịch 350g chứa các thành phần giàu năng lượng, nhiều chất có lợi cho cơ thể, cụ thể như tinh bột, chất xơ, chất đạm, chất... Cách dùng NẤU VỚI SỮA - Lấy 3 muỗng yến mạch (30 - 34g) hoà với 230ml nước, đun, khuấy đều 3-5 phút, sau khi sôi cho đường và 1 muỗng canh sữa đặc hoặc sữa bột, hoặc 100ml sữa tươi, thêm ít bơ cho vị thơm hơn. NẤU VỚI THỊT BẰM - Nấu 250ml nước với ít thịt bằm (hoặc tôm, lươn, cá) cho sôi, nêm nếm gia vị. Cho 3 muỗng yến mạch, khuấy đều tay, nấu tiếp trong 3 phút rồi cho tiếp hành, ngò, tiêu và thưởng thức.',
                'created' => '2022-05-25',
                'expiry' => '2022-06-04'
            ]
        ]);

        //
     DB::table('admins')->insert([
        [
            'name' => 'Nguyễn Ngọc Hải',
            'username' => 'hai123',
            'password' => bcrypt('hai123'),
            'image' => 'image'
        ],
        [
            'name' => 'Nguyễn Phương Trường',
            'username' => 'truong123',
            'password' => bcrypt('truong123'),
            'image' => 'image'
        ],
        [
            'name' => 'Võ Văn Thọ',
            'username' => 'tho123',
            'password' => bcrypt('tho123'),
            'image' => 'image'
        ],
        [
            'name' => 'Phạm Ngọc Thiện',
            'username' => 'thien123',
            'password' => bcrypt('thien123'),
            'image' => 'image'
        ]]);
    }
}