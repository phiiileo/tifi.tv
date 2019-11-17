//   Effect on sort movies

let myDropdown = $(".myDropdown");
let dropdown_content = $(".dropdown_content");
let dropdown_content_items = dropdown_content.children();
myDropdown.on("click", function () {
    dropdown_content.toggle();

    for (i = 0; i < dropdown_content_items.length; i++) {
        $(dropdown_content_items[i]).on("click", function () {
            let value_source = $(this).text();
            let sort_value = $(this).children(".fa-check");
            dropdown_content_items.children(".fa-check").removeClass("sort_active")
            sort_value.toggleClass("sort_active");
            $(".myDropdown .filter_value").text(value_source);

        })
    }
})


// effects on movie lists
let state_icon = $(".state_icon");
let primary_state = $(".m_state .icons");
let saw_movie = $(".fa-check");
let watch_movie = $(".movie_tag");
for (i = 0; i < state_icon.length; i++) {

    $(state_icon[i]).css("cursor", "pointer").on("click", function () {
        $(this).toggleClass("active_state_icon");
        primary_state.css("z-index", "1")
    })

}

$(saw_movie).on("click", function () {
    let b = $(this).parents(".m_state").siblings(".seen").toggleClass("display_flex");
})

$(watch_movie).on("click", function () {
    $(this).parents(".m_state").siblings(".watch").toggleClass("display_flex");
    let b = $(this).parent().toggleClass("moveup");
})


