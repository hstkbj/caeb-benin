import { deleteData, getData, getSingleData, postData, putData } from "../plugins/api";

export async function AllBlog(){
    return await getData('/blogs').then(res=>{
        return res.data.data
    })
}

export async function singleBlog(id) {
    return await getSingleData('/blogs/'+id).then(res=>{
        return res.data
    })
}

export async function postBlog(data) {
    return await postData('/addblogs',data).then(res=>{
        return res.data.blog
    })
}

export async function updateBlog(id,data) {
    return await putData('/udateblogs/'+id,data).then(res=>{
        return res.data.data
    })
}

export async function deleteBlog(id) {
    return await deleteData('/blog/'+id).then(res=>{
        return res.data
    })
}