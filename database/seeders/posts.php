<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

// use Carbon\Carbon;

class posts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->delete();
        DB::table('posts')->insert([
            [   'id' => 1,
                'title'=>'Đội hình hay nhất Cúp C1: Real Madrid áp đảo, "vua kiến tạo" Fernandes mất tích',
                'description'=>'Liên đoàn bóng đá châu Âu (UEFA) vừa công bố đội hình xuất sắc nhất Champions League 2021/22.',
                'content'=>'<p><span style=\"color:rgb(37, 37, 37); font-family:roboto-regular; font-size:15px\">Chiều 31/5, UEFA đã công bố đội hình hay nhất Champions League mùa giải 2021/22 theo sơ đồ 4-3-3 do Ban giám sát kỹ thuật lựa chọn. Đây cũng là sơ đồ mà nhà vô địch&nbsp;</span><a class=\"TextlinkBaiviet\" href=\"https://www.24h.com.vn/real-madrid-c48e1522.html\" style=\"font-family: Roboto-Regular; font-size: 15px; text-decoration-line: none; padding: 0px; margin: 15px 0px; box-sizing: border-box; transition: all 0.3s ease 0s; line-height: 24px; color: rgb(0, 0, 238);\" title=\"Real\">Real</a><span style=\"color:rgb(37, 37, 37); font-family:roboto-regular; font-size:15px\">&nbsp;Madrid và á quân&nbsp;</span><a class=\"TextlinkBaiviet\" href=\"https://www.24h.com.vn/liverpool-c48e1528.html\" style=\"font-family: Roboto-Regular; font-size: 15px; text-decoration-line: none; padding: 0px; margin: 15px 0px; box-sizing: border-box; transition: all 0.3s ease 0s; line-height: 24px; color: rgb(0, 0, 238);\" title=\"Liverpool\">Liverpool</a><span style=\"color:rgb(37, 37, 37); font-family:roboto-regular; font-size:15px\">&nbsp;chủ yếu sử dụng trong mùa giải vừa qua.</span></p>',
                'image'=>'E42pj_Tranh-cai-doi-hinh-hay-nhat-Cup-C1-Real-ap-dao-3-1653991536-849-width740height740.jpg',
                'view_counts'=>10000,
                'user_id'=> 1,
                'new_posts'=> 1,
                'hidden'=> 1,
                'slug'=> 'request-name-FO',
                'categories_id'=> 1,
                'highlight_post'=> 0,
            ],
            [   'id' => 2,
                'title'=>'Real CHÍNH THỨC đón siêu hậu vệ Rudiger, Vua châu Âu như "hổ thêm cánh"',
                'description'=>'Real Madrid xác nhận có sự phục vụ của trung vệ xuất sắc hàng đầu châu Âu, Antonio Rudiger từ Chelsea.',
                'content'=>'<p><span style=\"color:rgb(37, 37, 37); font-family:roboto-regular; font-size:15px\">Tối 2/6 (giờ Việt Nam), trang Twitter chính thức của&nbsp;</span><a class=\"TextlinkBaiviet\" href=\"https://www.24h.com.vn/real-madrid-c48e1522.html\" style=\"font-family: Roboto-Regular; font-size: 15px; text-decoration-line: none; padding: 0px; margin: 15px 0px; box-sizing: border-box; transition: all 0.3s ease 0s; line-height: 24px; color: rgb(0, 0, 238);\" title=\"Real\">Real</a><span style=\"color:rgb(37, 37, 37); font-family:roboto-regular; font-size:15px\">&nbsp;Madrid xác nhận đã đạt&nbsp;chiêu mộ thành công hậu vệ Antonio Rudiger từ Chelsea dưới dạng chuyển nhượng tự do.&nbsp;Theo chuyên gia săn tin chuyển nhượng Fabrizio Romano, hợp đồng giữa đôi bên&nbsp;có thời hạn tới năm 2026 không kèm điều khoản gia hạn hay phụ phí. Siêu sao người Đức cũng là tân binh đầu tiên của "đội bóng Hoàng gia" ở kỳ chuyển nhượng hè 2022.</span></p>', 
                'image'=>'6fBr7_Real-CHiNH-THuC-don-sieu-hau-ve-Rudiger-vua-chau-au-nhu-fupqfkuxeacq739--2--1654170998-835-width740height429.jpg',
                'view_counts'=>10500,
                'user_id'=> 1,
                'new_posts'=> 0,
                'hidden'=> 1,
                'slug'=> 'request-name-kL',
                'categories_id'=> 6,
                'highlight_post'=> 1,
            ],
            [   'id' => 3,
                'title'=>'Báo Thái Lan hú hồn với màn thoát thua phút bù giờ, thừa nhận U23 Việt Nam khó chơi',
                'description'=>'Báo chí Thái Lan đều tỏ ra hài lòng sau trận hòa 2-2 của U23 Thái Lan trước U23 Việt Nam trong ngày ra quân tại VCK U23 châu Á.',
                'content'=>'<p>Với lực lượng rất nổi bật với 9 cầu thủ đang chơi bóng tại châu Âu được bổ sung sau SEA Games, U23 Thái Lan thậm chí được đánh giá nhỉnh hơn so với U23 Việt Nam trước khi trận đấu diễn ra. Dù vậy, diễn biến của trận đấu lại cho thấy điều ngược lại khi nhà vô địch SEA Games 31 vẫn giữ được bản lĩnh và cách chơi đầy hiệu quả dù tân HLV&nbsp;Gong Oh-kyun chưa có nhiều thời gian để làm việc với các học trò.</p> \r\n\r\n <p>Cả 2 lần vượt lên dẫn trước của U23 Việt Nam đều là những tình huống mà chúng ta chủ động dứt điểm và gây bất ngờ cho đối phương bằng khả năng phối hợp đầy tốc độ. Dẫu vậy, U23 Thái Lan cũng cho thấy sự lì lợm khi cũng 2 lần đưa trận đấu trở lại vạch xuất phát. Đáng chú ý, bàn gỡ hòa của thầy trò HLV&nbsp;Worrawoot đến ở những phút bù giờ cuối trận.</p>',
                'image'=>'EjFIB_thai-lan-1-740-1654194652-543-width740height693.jpg',
                'view_counts'=>10010,
                'user_id'=> 4,
                'new_posts'=> 0,
                'hidden'=> 1,
                'slug'=> 'request-name',
                'categories_id'=> 6,
                'highlight_post'=> 1,
            ],
            
            
            
            [   'id' => 4,
                'title'=>'[22.06.02] Poster Cảnh Sát Vinh Dự',
                'description'=>'Dưới sự dẫn dắt của sư phụ, sự đồng hành của những người bạn tốt, Hạ Khiết đã ngày một trưởng thành 💙',
                'content'=>'<div dir=\"auto\" style=\"font-family: \"><span style=\"font-family:inherit\"><img alt=\"🔻\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t9c/1/16/1f53b.png\" style=\"border:0px; height:16px; width:16px\" /></span>Cảnh Sát Vinh Dự” là bộ phim kể về cuộc sống và công việc của cảnh sát nhân dân cấp cơ sở. Bốn cảnh sát mới được nhận vào công tác tại đồn cảnh sát Bát Lí Hà, đối mặt với áp lực công việc to lớn và thử thách mới của thời đại truyền thông, họ đã trải qua nhiều khó khăn, trắc trở, hoài nghi chính mình và thậm chí bỏ cuộc, cuối cùng trưởng thành dưới sự giúp đỡ của các tiền bối.</div>\r\n\r\n<div dir=\"auto\" style=\"font-family: \"><span style=\"font-family:inherit\"><img alt=\"🎋\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t35/1/16/1f38b.png\" style=\"border:0px; height:16px; width:16px\" /></span> Diễn viên chính: Trương Nhược Quân, Bạch Lộc, Ninh Lý, Từ Khai Sính.....</div>\r\n\r\n<div dir=\"auto\" style=\"font-family: \"><span style=\"font-family:inherit\"><img alt=\"🎋\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t35/1/16/1f38b.png\" style=\"border:0px; height:16px; width:16px\" /></span>Diễn viên khách mời: Vương Cảnh Xuân</div>\r\n\r\n<div dir=\"auto\" style=\"font-family: \"><span style=\"font-family:inherit\"><img alt=\"🥝\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/te0/1/16/1f95d.png\" style=\"border:0px; height:16px; width:16px\" /></span> Phim gồm 38 tập, phát sóng vào mỗi tối từ 19h (VN) 28/5 trên iQiyi</div>\r\n\r\n<div dir=\"auto\" style=\"font-family: \">- Tài khoản vip ngày đầu chiếu 6 tập, những ngày tiếp theo chiếu 2 tập</div>\r\n\r\n<div dir=\"auto\" style=\"font-family: \">- Tài khoản thường ngày đầu chiếu 2 tập, những ngày tiếp theo chiếu 1 tập vào 21h30 (VN)</div>',
                'image'=>'9UvKA_Police.jpg',
                'view_counts'=>10010,
                'user_id'=> 1,
                'new_posts'=> 1,
                'hidden'=> 1,
                'slug'=> 'request-name-oG',
                'categories_id'=> 4,
                'highlight_post'=> 0,
            ],
            
        ]);
        //
    }
}
